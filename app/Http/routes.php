<?php

Route::group(['prefix' => 'api'], function ()
{
    Route::controller('data', 'Common\DataController');
    Route::controller('politicians', 'Politicians\PoliticianController');
    Route::controller('users', 'Users\UserController');
});

Route::get('/contact', ['as' => 'contact', function(){
    return view('contact');
}]);

Route::post('/contact', 'Contact\ContactController@postStore');

Route::get('/mission', function ()
{
    return view('mission');
});

Route::get('/policies', function ()
{
    return view('policy');
});

Route::get('/politicians/{slug}', function ($slug)
{
    return view('politician-detail')->with('slug', $slug);
});

Route::get('/politicians', function ()
{
    return view('politicians');
});

Route::get('/', function ()
{
    return view('home');
});