<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/user/edit', 'Usercontroller@edit');

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('{path}', 'HomeController@index')->where('path', '([A-z\d\-\/_.]+)?');

Route::get('/paket','PaketController@index');
Route::get('/paket/{id}/edit', 'PaketController@edit');
// Route::post('/paket/{id}/update', 'PaketController@update');