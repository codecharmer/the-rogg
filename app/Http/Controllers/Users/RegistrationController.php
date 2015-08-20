<?php

namespace TheRogg\Http\Controllers\Users;

use Hash;
use Input;
use InvalidArgumentException;
use Mail;
use Redirect;
use Session;
use TheRogg\Domain\User;
use TheRogg\Http\Controllers\Controller;
use TheRogg\Repositories\Users\UserRepositoryInterface as UserRepo;
use Validator;

class RegistrationController extends Controller
{
    private $userRepo;

    public function __construct(UserRepo $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function getIndex()
    {
        return View('register');
    }

    public function postIndex()
    {
        $rules = [
            'username' => 'required|min:6|unique:users',
            'email'    => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6'
        ];

        $input = Input::only(['username', 'email', 'password', 'password_confirmation']);

        $validator = Validator::make($input, $rules);

        if ($validator->fails())
            return Redirect::back()->withInput()->withErrors($validator);

        $confirmationCode = str_random(30);
        $this->userRepo->make(Input::get('username'), Input::get('email'), Hash::make(Input::get('password')), $confirmationCode);

        Mail::send('emails.verify', ['confirmationCode' => $confirmationCode], function ($message)
        {
            /** @noinspection PhpUndefinedMethodInspection */
            $message->from('no-reply@therogg.com')
                ->to(Input::get('email'), Input::get('username'))
                ->subject('The Rogg - Verify your email address');
        });

        Session::flash('message', 'Thanks for signing up! Please check your email.');

        return Redirect::back();
    }

    public function confirm($confirmationCode)
    {
        if (!$confirmationCode)
            throw new InvalidArgumentException('You must submit a confirmation code.');

        /** @var User $user */
        $user = $this->userRepo->findBy('confirmationCode', $confirmationCode);

        if (!$user)
            throw new InvalidArgumentException('The confirmation code was invalid.');

        $user->Confirm();
        $user->setConfirmationCode(null);
        $this->userRepo->save($user);

        Session::flash('message', 'You have successfully verified your account.');

        return Redirect::home();
    }
}