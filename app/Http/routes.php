<?php

Route::group(['prefix' => 'api'], function ()
{
    Route::controller('politicians', 'Politicians\PoliticianController');
});

Route::get('/', function ()
{
    return view('welcome');
});
