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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'Frontend\UnidelController@index');
Route::get('/about', 'Frontend\UnidelController@about');
Route::get('/digital_electronics', 'Frontend\UnidelController@digital_electronics');

