<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login','ApiPassportController@login');
Route::post('/logout','ApiPassportController@logoutApi');



//Route::resource('projects','apiProjectController');

Route::get('/projects','apiProjectController@index');
Route::post('/projects','apiProjectController@store');
Route::get('/projects/{project}','apiProjectController@show');
Route::patch('/projects/{project}','apiProjectController@update');
Route::delete('/projects/{project}','apiProjectController@destroy');