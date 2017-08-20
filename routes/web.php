<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('dashboard', function () {
    return view('dashboard');
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
Route::get('/painelvotar', function () {
    return view('painelvotar');
});

Route::post('users/updatepassword', 'UserController@updatepassword');
Route::post('users/updateemail', 'UserController@updateemail');
Route::post('users/updateprofile', 'UserController@updateprofile');
