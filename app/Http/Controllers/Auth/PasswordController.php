<?php

namespace TheRogg\Http\Controllers\Auth;

use Illuminate\Foundation\Auth\ResetsPasswords;
use TheRogg\Http\Controllers\Controller;

class PasswordController extends Controller
{

    use ResetsPasswords;

    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('guest');
    }
}
