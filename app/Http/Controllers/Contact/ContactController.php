<?php

namespace TheRogg\Http\Controllers\Contact;

use Mail;
use Redirect;
use Request;
use TheRogg\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function getIndex()
    {
        return View('contact');
    }

    public function postIndex()
    {
        Mail::send('emails.contact',
            [
                'name'         => Request::get('name'),
                'email'        => Request::get('email'),
                'user_message' => Request::get('message'),
            ], function ($message)
            {
                $message->from('contact@therogg.com');
                $message->to('contact@therogg.com', 'Admin')->subject('The Rogg Feedback');
            });

        return Redirect::back()->with('message', 'Thanks for contacting us!');
    }
}