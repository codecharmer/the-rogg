<?php

Route::group(['prefix' => 'api'], function ()
{
    Route::controller('politicians', 'Politicians\PoliticianController');
    Route::controller('users', 'Users\UserController');
});

Route::group(['prefix' => 'admin'], function ()
{
    Route::controller('politicians', 'Politicians\AdminPoliticianController');
    Route::controller('users', 'Users\AdminUserController');
});

Route::get('/contact', function ()
{
    return view('contact');
});

Route::get('/mission', function ()
{
    return view('mission');
});

Route::get('/policies', function ()
{
    return view('policy');
});

Route::get('/politicians', function ()
{
    return view('politicians');
});

Route::get('/', function ()
{
    return view('home');
});