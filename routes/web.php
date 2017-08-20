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
