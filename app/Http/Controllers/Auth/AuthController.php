<?php

namespace TheRogg\Http\Controllers\Auth;

use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Mail;
use Session;
use TheRogg\Http\Controllers\Controller;
use TheRogg\Repositories\Users\UserRepositoryInterface as UserRepo;
use Validator;

class AuthController extends Controller
{
    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    protected $redirectPath = '/';
    private   $userRepo;

    public function __construct(UserRepo $userRepo)
    {
        $this->middleware('guest', ['except' => 'getLogout']);
        $this->userRepo = $userRepo;
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => 'required|min:4|unique:users',
            'email'    => 'required|email|unique:users',
            'password' => 'required|confirmed|min:8'
        ]);
    }

    protected function create(array $data)
    {
        $confirmationCode = str_random(30);
        $user             = $this->userRepo->make($data['username'], $data['email'], $data['password'], $confirmationCode);

        $this->sendValidation($confirmationCode, $data['email'], $data['username']);

        Session::flash('message', 'Thanks for signing up! Please check your email for a verification link.');

        return $user;
    }

    private function sendValidation($confirmationCode, $email, $username)
    {
        Mail::send('emails.verify', ['confirmationCode' => $confirmationCode], function ($message) use ($email, $username)
        {
            /** @noinspection PhpUndefinedMethodInspection */
            $message->from('no-reply@therogg.com')
                ->to($email, $username)
                ->subject('The Rogg - Verify your email address');
        });
    }
}
