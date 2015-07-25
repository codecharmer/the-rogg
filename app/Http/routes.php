<?php

Route::group(['prefix' => 'api'], function ()
{
    Route::controller('politicians', 'Politicians\PoliticianController');
    Route::controller('users', 'Users\UserControllers');
});

Route::get('/', function ()
{
    return view('welcome');
});
