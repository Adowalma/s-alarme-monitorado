<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
	
// 		return view('home');
    
// })->name('home');
Route::get('/', 'SitePagesController@index')->name('home');

Auth::routes();

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
// ************************E-commerce Pages***************************
Route::get('/home', 'SitePagesController@index')->name('ecommerce.index');
Route::get('/cart', 'SitePagesController@cart')->name('cart');
Route::get('/about', 'SitePagesController@about')->name('about');
Route::get('/contact', 'SitePagesController@contact')->name('contact');
Route::get('/news', 'SitePagesController@news')->name('news');
Route::get('/shop', 'SitePagesController@shop')->name('shop');
Route::get('/single-news', 'SitePagesController@singleNews')->name('singleNews');
Route::get('/single-product', 'SitePagesController@singleProduct')->name('singleProduct');



Route::group(['middleware' => 'auth'], function () {

		// ************************** Cart  ********************************

	Route::get('/checkout', 'CheckoutController@index')->name('checkout');
	Route::get('/checkout/test', 'CheckoutController@store')->name('checkout.test');
	Route::get('/cart/saved', 'CheckoutController@saveCart')->name('checkout.save');
	Route::get('/cart/end', 'CheckoutController@awaitConfirm')->name('checkout.await');
	Route::get('/checkout/aprovar', 'CheckoutController@aprovarList')->name('checkout.approve');
	Route::get('/checkout/aprovado', 'CheckoutController@aprovadoList')->name('checkout.approved');
	Route::get('/checkout/end/{id}', 'CheckoutController@pagoMove')->name('checkout.end');

	// ************************** User  ********************************
	Route::resource('user', 'UserController', ['except' => ['show','destroy']]);
	Route::get('user/delete/{id}', 'UserController@destroy')->name('user.destroy')->middleware('can:forAdmins');
	Route::get('user/bloquear/{id}', 'UserController@bloquear')->name('user.bloquear')->middleware('can:forAdmins');


	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'PageController@index']);

	
	// ************************** Mapa  ********************************
	Route::get('ver-mapa/ver', [
    'uses' => 'MapaController@getMapa',
    'as' => 'ver-mapa.ver'
	]);
	Route::get('mapaTeste/listar', 'MapaController@testMapa')->name('mapa.teste');
	
	
	// ************************** Posto  ********************************
	Route::get('posto/listar', 'PostoController@index')->middleware('can:isAdmin');
	Route::resource('posto', 'PostoController', ['except' => ['show','index']])->middleware('can:isAdmin');
	
	
	// ************************** Product  ********************************
	Route::get('produto/listar', 'ProductTypeController@index')->name('produto.index')->middleware('can:relatorio_venda');
	Route::get('produto/delete/{id}', 'ProductTypeController@destroy')->name('produto.destroy')->middleware('can:venda');
	Route::resource('produto', 'ProductTypeController', ['except' => ['show','index','destroy']])->middleware('can:venda');
	Route::get('produto/bloquear/{id}', 'ProductTypeController@bloquear')->name('produto.bloquear')->middleware('can:venda');

		// ************************** ProductUser ********************************

	Route::get('produto/user', 'ProductController@userProductCreate')->name('produto.user.create')->middleware('can:isCliente');
	Route::post('produto/user/create', 'ProductController@userProduct')->name('produto.user.store')->middleware('can:isCliente');

	// ************************** Product Type ********************************
	Route::get('produtoType/listar', 'ProductTypeController@index')->name('produtoType.index')->middleware('can:relatorio_venda');
	Route::get('produtoType/delete/{id}', 'ProductTypeController@destroy')->name('produtoType.destroy')->middleware('can:venda');
	Route::resource('produtoType', 'ProductTypeController', ['except' => ['show','index','destroy']])->middleware('can:venda');

	
	
	// ************************** Funcionario  ********************************
	Route::get('funcionario/listar', 'FuncionarioController@index')->name('funcionario.index')->middleware('can:forAdmins');
	Route::resource('funcionario', 'FuncionarioController', ['except' => ['show','index']])->middleware('can:forAdmins');
	
	// ************************** Cliente  ********************************
	Route::get('cliente/listar', 'ClienteController@index')->name('cliente.index')->middleware('can:listar_user');
	Route::resource('cliente', 'ClienteController', ['except' => ['show','index']])->middleware('can:ForAdmins');

	// ************************** PDF *****************************
	//  Route::get('relatorio/venda', 'RelatorioController@index')->name('relatorio.venda')->middleware('can:relatorio_venda');
	 Route::get('relatorio/urgencia', 'RelatorioController@index')->name('relatorio.urgencia');

	 ///######################################################
	 Route::resource('videos','MediaController'); 

	 Route::get('/new/notfication','UrgencyController@index')->name('notification.new'); 
});

// ********************* Carrinho ***************************
// Route::get('/', [ProductController::class, 'index']);  
// Route::get('cart', [ProductController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}','CartController@addToCart')->name('add.to.cart');
Route::patch('update-cart','CartController@updateCart')->name('update.cart');
Route::delete('remove-from-cart','CartController@removeCart')->name('remove.from.cart');


//********************     Test-endpoint    ******** */

Route::get('teste/ler','Web\TesteController@getAll')->name('list.test');
Route::get('teste/enviar','Web\TesteController@addGPS')->name('send.test');
