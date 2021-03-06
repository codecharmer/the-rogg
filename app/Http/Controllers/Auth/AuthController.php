<?php

namespace TheRogg\Http\Controllers\Auth;

use Auth;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Http\Request;
use Mail;
use Session;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use TheRogg\Domain\User;
use TheRogg\Http\Controllers\Controller;
use TheRogg\Repositories\Users\UserRepositoryInterface as UserRepo;
use Validator;

class AuthController extends Controller
{
    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    protected $redirectPath = '/';
    private   $userRepo;
    /**
     * @var Request
     */
    private $request;

    public function __construct(UserRepo $userRepo, Request $request)
    {
        $this->middleware('guest', ['except' => 'getLogout']);
        $this->userRepo = $userRepo;
        $this->request  = $request;
    }

    public function postRegister(Request $request)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails())
        {
            $this->throwValidationException(
                $request, $validator
            );
        }

        $this->create($request->all());

        return redirect($this->redirectPath());
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
            'password' => 'required|confirmed|min:8',
            'photo'    => 'mimes:jpeg,gif,png|max:100'
        ]);
    }

    protected function create(array $data)
    {
        $filename     = null;
        $userPhotoDir = public_path() . '/assets/images/user-photos';

        $confirmationCode = str_random(30);
        $user             = $this->userRepo->make($data['username'], $data['email'], $data['password'], $confirmationCode, $data['party']);

        if (array_key_exists('photo', $data))
        {
            /** @var UploadedFile $photo */
            $photo = $data['photo'];

            if ($photo->isValid())
            {
                $filename = $data['username'] . '.' . $photo->getClientOriginalExtension();
                $photo->move($userPhotoDir, $filename);
                $user->setPhoto($filename);
                $this->userRepo->save($user);
            }
        }

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

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            $this->loginUsername() => 'required', 'password' => 'required',
        ]);

        $throttles = $this->isUsingThrottlesLoginsTrait();

        if ($throttles && $this->hasTooManyLoginAttempts($request))
            return $this->sendLockoutResponse($request);

        $credentials = $this->getCredentials($request);

        if (Auth::attempt($credentials, $request->has('remember')))
        {
            /** @var User $user */
            $user = Auth::user();
            if (!$user->isActive())
            {
                Auth::logout();

                return redirect($this->loginPath())
                    ->withInput($request->only($this->loginUsername(), 'remember'))
                    ->withErrors([
                        'notConfirmed' => 'Please check your email for your confirmation link and verify your account.',
                    ]);
            }

            return $this->handleUserWasAuthenticated($request, $throttles);
        }

        if ($throttles)
            $this->incrementLoginAttempts($request);

        return redirect($this->loginPath())
            ->withInput($request->only($this->loginUsername(), 'remember'))
            ->withErrors([
                $this->loginUsername() => $this->getFailedLoginMessage(),
            ]);
    }
}
