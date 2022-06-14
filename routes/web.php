<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PageController@index')->name('home');
Route::get('/viaggi', 'ViaggioController@index')->name('viaggi.index');
Route::get('/viaggi/{viaggio}', 'ViaggioController@show')->name('viaggi.show');
