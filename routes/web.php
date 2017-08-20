<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('dashboard', function () {
    return view('dashboard');
});
Route::get('template', function () {
    return view('template');
});
//Rotas para dashboard de projetos e recuros de projetos

Route::resource('/projetos', 'ProjetosController');

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