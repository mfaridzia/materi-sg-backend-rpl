<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hallo', function() {
    return "Hallo Bro!!";
});

Route::get('/test', 'TestController@test');

Route::get('/form', 'TestController@form');
Route::post('/proses-form', 'TestController@prosesForm');



//
Route::get('/blog/tambah', 'BlogController@create');
Route::post('/blog/tambah', 'BlogController@store');
Route::get('/blog', 'BlogController@daftarArtikel');
Route::get('/blog/{id}', 'BlogController@detailArtikel');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');