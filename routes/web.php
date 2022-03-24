<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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

Route::get('/home', [HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	// ************************** User  ********************************
	Route::resource('user', 'UserController', ['except' => ['show']])->middleware('can:isAdmin');
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'PageController@index']);

	
	// ************************** Mapa  ********************************
	Route::get('ver-mapa/ver', [
    'uses' => 'MapaController@getMapa',
    'as' => 'ver-mapa.ver'
	]);
	
	
	// ************************** Posto  ********************************
	Route::get('posto/listar', 'PostoController@index')->middleware('can:isAdmin');
	Route::resource('posto', 'PostoController', ['except' => ['show','index']])->middleware('can:isAdmin');

});


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

