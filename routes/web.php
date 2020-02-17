<?php



Route::get('/attendances/create', 'AttendancesController@create');
Route::get('/movies/create', 'MoviesController@create');
Route::post('/movies/store', 'MoviesController@store')->name('');

Route::get('/laptops/store', 'LaptopsController@store');
Route::get('/laptops/update', 'LaptopsController@update');
Route::get('/laptops/delete', 'LaptopsController@delete');


Route::get('/cinemas', 'CinemasController@index');



Route::get('/bands', 'BandsController@index');
Route::get('/bands/{band}', 'BandsController@show');

Route::get('/bands/{band}/songs/create', 'SongsController@create');
Route::get('/bands/songs/{song}/edit', 'SongsController@edit');
Route::get('/bands/songs/{song}/delete', 'SongsController@delete');

Route::post('/bands/{band}/songs/store', 'SongsController@store');
Route::post('/bands/songs/update', 'SongsController@update');