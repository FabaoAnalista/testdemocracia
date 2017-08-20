<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('teste', function () {
    return view('teste');
});

Route::get('dashboard', function () {
    return view('dashboard');
});
Route::get('template', function () {
    return view('template');
});
Route::resource('/projetos', 'ProjetosController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('users/password', function () {
    return view('users.password');
});
Route::get('users/email', function () {
    return view('users.email');
});
Route::get('users/profile', function () {
    return view('users.profile');
});


Route::post('users/updatepassword', 'UserController@updatepassword');
Route::post('users/updateemail', 'UserController@updateemail');
Route::post('users/updateprofile', 'UserController@updateprofile');