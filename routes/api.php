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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('users/login', ['as' => 'login', 'uses' => 'AuthAPIController@login']);

Route::group(['middleware'=>['auth:sanctum']], function(){
    Route::post('users/logout', ['as' => 'logout', 'uses' => 'AuthAPIController@logout']);
});
