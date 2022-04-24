<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Gate;
// use App\Http\Controllers\API;

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

 //Protected User Routes
 Route::group(['middleware'=>'auth:sanctum'], function(){

    // **********User CRUD-START****************
        Route::resource('users', 'API\UserController');
        Route::get('users/{id}', 'API\UserController@getUser');
        Route::put('users/bloqued/{id}', 'API\UserController@bloquear');
    //*************User CRUD-END ************
    
    // **********Funcionario CRUD-START****************
        Route::resource('funcionarios', 'API\FuncionarioController');
    //*************Funcionario CRUD-END ************

    // ************ Product CRUD-START ****************
        Route::resource('produtos', 'API\ProductController');
    //************* Product CRUD-END ************
    // ************ Product-Type CRUD-START ****************
        Route::resource('produtosTipo', 'API\ProductTypeController');
    //************* Product CRUD-END ************

 });
Route::post('login', ['as' => 'login', 'uses' => 'API\AuthController@login']);

Route::group(['middleware'=>['auth:sanctum']], function(){
    Route::post('logout', ['as' => 'logout', 'uses' => 'API\AuthController@logout']);
});
