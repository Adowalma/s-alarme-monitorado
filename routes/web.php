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

// ************************E-commerce Pages***************************
Route::get('/e-commerce', 'SitePagesController@index')->name('ecommerce.index');
Route::get('/cart', 'SitePagesController@cart')->name('cart');
Route::get('/checkout', 'SitePagesController@checkout')->name('checkout');
Route::get('/about', 'SitePagesController@about')->name('about');
Route::get('/contact', 'SitePagesController@contact')->name('contact');
Route::get('/news', 'SitePagesController@news')->name('news');
Route::get('/shop', 'SitePagesController@shop')->name('shop');
Route::get('/single-news', 'SitePagesController@singleNews')->name('singleNews');
Route::get('/single-product', 'SitePagesController@singleProduct')->name('singleProduct');



Route::group(['middleware' => 'auth'], function () {
	// ************************** User  ********************************
	Route::resource('user', 'UserController', ['except' => ['show','destroy']])->middleware('can:isAdmin');
	Route::get('user/delete/{id}', 'UserController@destroy')->name('user.destroy')->middleware('can:isAdmin');
	Route::get('user/bloquear/{id}', 'UserController@bloquear')->name('user.bloquear')->middleware('can:isAdmin');


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

	// ************************** Product Type ********************************
	Route::get('produtoType/listar', 'ProductTypeController@index')->name('produtoType.index')->middleware('can:isAdmin');
	Route::get('produtoType/delete/{id}', 'ProductTypeController@destroy')->name('produtoType.destroy')->middleware('can:isAdmin');
	Route::resource('produtoType', 'ProductTypeController', ['except' => ['show','index','destroy']])->middleware('can:isAdmin');

	
	
	// ************************** Funcionario  ********************************
	Route::get('funcionario/listar', 'FuncionarioController@index')->name('funcionario.index')->middleware('can:isAdmin');
	Route::resource('funcionario', 'FuncionarioController', ['except' => ['show','index']])->middleware('can:isAdmin');
	
	// ************************** Cliente  ********************************
	Route::get('cliente/listar', 'ClienteController@index')->name('cliente.index')->middleware('can:isAdmin');
	Route::resource('cliente', 'ClienteController', ['except' => ['show','index']])->middleware('can:isAdmin');

	// ************************** PDF *****************************
	Route::get('relatorio/pdf', 'RelatorioController@exibirPDF')->name('relatorio.pdf');
	Route::get('relatorio/listar', 'RelatorioController@index')->name('relatorio.index');
	Route::get('relatorio/gerar', 'RelatorioController@gerar')->name('relatorio.gerar');
});