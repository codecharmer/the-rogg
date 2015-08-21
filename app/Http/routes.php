<?php

Route::group(['prefix' => 'api'], function ()
{
    Route::controller('data', 'Common\DataController');
    Route::post('politicians/review-politician', ['middleware' => 'auth', 'uses' => 'Politicians\PoliticianController@postReviewPolitician']);
    Route::controller('politicians', 'Politicians\PoliticianController');
});

Route::controller('contact', 'Contact\ContactController');

Route::group(['prefix' => 'politicians'], function ()
{
    Route::get('/{slug}', function ($slug) { return view('politician-detail')->with('slug', $slug); });
    Route::get('/', function () { return view('politicians'); });
});

Route::group(['prefix' => 'auth'], function ()
{
    Route::get('login', 'Auth\AuthController@getLogin');
    Route::post('login', 'Auth\AuthController@postLogin');
    Route::get('logout', 'Auth\AuthController@getLogout');

    Route::get('register/verify/{confirmationCode}', 'Auth\VerificationController@getConfirm');
    Route::get('register', 'Auth\AuthController@getRegister');
    Route::post('register', 'Auth\AuthController@postRegister');
});

Route::group(['prefix' => 'password'], function ()
{
    Route::get('email', 'Auth\PasswordController@getEmail');
    Route::post('email', 'Auth\PasswordController@postEmail');

    Route::get('reset/{token}', 'Auth\PasswordController@getReset');
    Route::post('reset', 'Auth\PasswordController@postReset');
});

Route::get('mission', function () { return view('mission'); });

Route::get('policies', function () { return view('policy'); });

Route::get('home', function () { return Redirect::to('/'); });
Route::get('/', function () { return view('home'); });