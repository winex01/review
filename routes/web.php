<?php

Route::get('/', function () {
    // return view('welcome');
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
