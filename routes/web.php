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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/about', 'AboutUsController@index')->name('AboutUs');
Route::get('/userapikey', 'AboutUsController@api')->name('api_token');

Route::resource('projects','ProjectController');
