<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
	
	
	Route::get('posto/listar', 'App\Http\Controllers\PostoController@index');
	Route::resource('posto', 'App\Http\Controllers\PostoController', ['except' => ['show','index']]);

	// ================== perfil==============

	Route::get('perfil/listar', ['as' => 'perfil.listar', 'uses' => 'App\Http\Controllers\PerfilController@index']);
	Route::get('perfil/destroy/{id}', ['as' => 'perfil.destroy', 'uses' => 'App\Http\Controllers\PerfilController@destroy']);
	// Route::get('perfil/listar', 'App\Http\Controllers\PerfilController@index');
	Route::resource('perfil', 'App\Http\Controllers\PerfilController', ['except' => ['show','index','destroy']]);



});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

