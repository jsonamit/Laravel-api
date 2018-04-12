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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
Route::get('/user',['uses'=>'Controller@getUser']);
Route::get('/user/{id}',['uses'=>'Controller@getUsesbyid']);
Route::post('/updateuser',['uses'=>'Controller@updateUser']);
Route::post('/adduser',['uses'=>'Controller@addUser']);
Route::get('/deleteuser/{id}',['uses'=>'Controller@deleteUser']);
