<?php

Route::group(['prefix' => 'api'], function ()
{
    Route::controller('politicians', 'Politicians\PoliticianController');
    Route::controller('users', 'Users\UserControllers');
});

Route::group(['prefix' => 'admin'], function(){
    Route::controller('politicians', 'Politicians\AdminPoliticianController');
});

Route::get('/', function ()
{
    return view('welcome');
});