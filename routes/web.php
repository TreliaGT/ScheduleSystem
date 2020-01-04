<?php

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

Route::resource('/', 'HomeController');
Route::post('/Employee', 'HomeController@Employee');
Route::post('/Day', 'HomeController@Day');
Route::post('/Time', 'HomeController@Time');
