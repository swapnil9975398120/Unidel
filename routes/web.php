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
Route::get('/electroslush', 'Frontend\UnidelController@electroslush');
Route::get('/matrikon_softdel', 'Frontend\UnidelController@matrikon_softdel');
Route::get('/ssd_drives', 'Frontend\UnidelController@ssd_drives');
Route::get('/eurotherm_del', 'Frontend\UnidelController@eurotherm_del');
Route::get('/land_del_infrared', 'Frontend\UnidelController@land_del_infrared');
Route::get('/parker_hannifin', 'Frontend\UnidelController@parker_hannifin');
Route::get('/lumasense_technologies', 'Frontend\UnidelController@lumasense_technologies');
Route::get('/online_resources', 'Frontend\UnidelController@online_resources');
Route::get('/careers', 'Frontend\UnidelController@careers');
Route::get('/news_room', 'Frontend\UnidelController@news_room');

