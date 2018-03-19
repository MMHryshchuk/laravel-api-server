<?php

use Illuminate\Http\Request;
Use App\User;
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


Route::get('users', 'UserController@index');
Route::get('users/{id}', 'UserController@show');
Route::post('users', 'UserController@store');
Route::put('users/{id}', 'UserController@update')->middleware('usersedit');
Route::post('users/delete', 'UserController@destroy')->middleware('users');


Route::post('gettasks', 'TaskController@index');
Route::post('tasks', 'TaskController@store');
Route::post('tasks/delete', 'TaskController@destroy');