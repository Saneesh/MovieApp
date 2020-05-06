<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MovieController@index')->name('movie.index');
Route::get('/movies/{movie}', 'MovieController@show')->name('movies.index');
