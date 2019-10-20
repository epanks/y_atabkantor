<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('{path}', 'HomeController@index')->where('path', '([A-z\d\-\/_.]+)?');

Route::get('/create_paket','PaketController@create')->name('paket.create');
Route::post('/create_paket','PaketController@store');
Route::get('/paket','PaketController@index');
Route::get('/paket/{id}/edit', 'PaketController@edit');
Route::post('/paket/{id}/update', 'PaketController@update');
//Route::get('/paket/{id}/show', 'PaketController@show');