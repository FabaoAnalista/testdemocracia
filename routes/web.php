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
