<?php

Route::get('/', 'HomeController@index')->name('home');

Route::get('/test', function() {
    return view('welcome');
});

Auth::routes();

Route::get('/home', function() {
	return view('home2');
});

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');
