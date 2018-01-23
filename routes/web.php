<?php

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

Route::get('/', 'MainController@home');//ruta de la pagina de inicio
Route::get('/carrito', 'CarritoController@index');
Auth::routes();
//rutas REST
Route::resource('products', 'ProductsController');
Route::resource('in_carrito_products', 'InCarritoProductsController', [
	'only' => ['store', 'destroy']//solamente genera rutas para guardar y eliminar
	]);

Route::get('/home', 'HomeController@index')->name('home');
