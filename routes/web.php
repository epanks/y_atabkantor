<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('{path}', 'HomeController@index')->where('path', '([A-z\d\-\/_.]+)?');

Route::get('/wilayah/{id}','BalaiController@wilayah');

Route::get('/balai','BalaiController@index');
Route::get('/balai/{id}/show', 'BalaiController@show');


Route::get('/satker','SatkerController@index');



Route::get('/create_paket','PaketController@create')->name('paket.create');
Route::post('/create_paket','PaketController@store');
Route::get('/paket','PaketController@index');
Route::get('/paket/{id}/edit', 'PaketController@edit');
Route::post('/paket/{id}/update', 'PaketController@update');
<<<<<<< HEAD
Route::get('/paket/{id}', 'PaketController@show');
=======
Route::get('/paket/{id}/delete', 'PaketController@delete');
//Route::get('/paket/{id}/show', 'PaketController@show');
Route::get('/paketdashboard', 'PaketController@paketdashboard');
>>>>>>> 8d8d16d70001ec797ea027f0bdeb7be336a0263a
