<?php

Route::get('login2', function() {
	return view('auth.login2');
});

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider')->name('login.facebook');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');
