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
	// dd(auth()->user());
	if(auth()->user()==null){
		return view('welcome');
	}else{
		return view('home');
	}
    
})->name('home');

Auth::routes();

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
Auth::routes();


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
	
	
	// ************************** Product  ********************************
	Route::get('produto/listar', 'ProductController@index')->name('produto.index')->middleware('can:isAdmin');
	Route::resource('produto', 'ProductController', ['except' => ['show','index']])->middleware('can:isAdmin');
	Route::post('produtoType/create', 'ProductController@storeType')->name('produtoType.store')->middleware('can:isAdmin');
	
	
	// ************************** Funcionario  ********************************
	Route::get('funcionario/listar', 'FuncionarioController@index')->name('funcionario.index')->middleware('can:isAdmin');
	Route::resource('funcionario', 'FuncionarioController', ['except' => ['show','index']])->middleware('can:isAdmin');

	// ************************** PDF *****************************
	Route::get('relatorio/pdf', 'RelatorioController@exibirPDF')->name('relatorio.pdf');
	Route::get('relatorio/listar', 'RelatorioController@index')->name('relatorio.index');
	Route::get('relatorio/gerar', 'RelatorioController@gerar')->name('relatorio.gerar');
});