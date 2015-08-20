<?php

Route::group(['prefix' => 'api'], function ()
{
    Route::controller('data', 'Common\DataController');
    Route::controller('politicians', 'Politicians\PoliticianController');
});

Route::controller('contact', 'Contact\ContactController');

Route::get('mission', function () { return view('mission'); });

Route::get('policies', function () { return view('policy'); });

Route::get('politicians/{slug}', function ($slug) { return view('politician-detail')->with('slug', $slug); });
Route::get('politicians', function () { return view('politicians'); });

Route::group(['prefix' => 'auth'], function ()
{
    Route::get('login', 'Auth\AuthController@getLogin');
    Route::post('login', 'Auth\AuthController@postLogin');
    Route::get('logout', 'Auth\AuthController@getLogout');

    Route::get('register/verify/{confirmationCode}', 'Auth\VerificationController@getConfirm');
    Route::get('register', 'Auth\AuthController@getRegister');
    Route::post('register', 'Auth\AuthController@postRegister');
});

Route::get('/', function () { return view('home'); });