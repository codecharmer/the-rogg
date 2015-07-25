<?php

Route::group(['prefix' => 'api'], function ()
{
    Route::controller('politicians', 'Politicians\PoliticianController');
    ROute::controller('users', 'Users\UserControllers');
});

Route::get('/', function ()
{
    return view('welcome');
});
