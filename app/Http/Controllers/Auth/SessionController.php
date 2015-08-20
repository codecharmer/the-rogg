<?php

namespace TheRogg\Http\Controllers\Auth;

use Auth;
use Input;
use Redirect;
use Session;
use TheRogg\Http\Controllers\Controller;
use Validator;

class SessionController extends Controller
{
    public function store()
    {
        $rules = [
            'username' => 'required|exists:users',
            'password' => 'required'
        ];

        $input = Input::only(['username', 'email', 'password']);

        $validator = Validator::make($input, $rules);

        if ($validator->fails())
        {
            return Redirect::back()->withInput()->withErrors($validator);
        }

        $credentials = [
            'username'  => Input::get('username'),
            'password'  => Input::get('password'),
            'confirmed' => 1
        ];

        if (!Auth::attempt($credentials))
        {
            return Redirect::back()
                ->withInput()
                ->withErrors([
                    'credentials' => 'We were unable to sign you in.'
                ]);
        }

        Session::flash('message', 'Welcome back!');

        return Redirect::home();
    }
}