<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Route Api 

//Route Api Users
Route::get('api_users', 'ApiUsersController@getAll');
Route::get('api_users/{id}', 'ApiUsersController@getUsers');
Route::post('api_users', 'ApiUsersController@createUsers');
Route::put('api_users/{id}', 'ApiUsersController@updateUsers');
Route::delete('api_users/{id}', 'ApiUsersController@deleteUsers');




