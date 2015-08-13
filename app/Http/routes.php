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

Route::get('/', function ()
{
    return view('home');
});