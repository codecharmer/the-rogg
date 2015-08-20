<?php

namespace TheRogg\Http\Controllers\Contact;

use TheRogg\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function getCreate()
    {
        return view('contact');
    }

    public function postStore()
    {
    }
}