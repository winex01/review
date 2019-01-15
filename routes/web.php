<?php

Route::get('sample', function() {
	return view('test');
});


Route::get('login2', function() {
	return view('auth.login2');
});

Route::get('/', 'HomeController@index')->name('home');
Route::get('/project/{project}', 'ProjectController@show')->name('project');

Auth::routes();

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider')->name('login.facebook');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');


