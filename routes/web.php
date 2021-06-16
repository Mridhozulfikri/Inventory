<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'PagesController@home');
Route::get('/bm', 'BmController@index');

Route::get('/transaksi', 'MahasiswaController@index');