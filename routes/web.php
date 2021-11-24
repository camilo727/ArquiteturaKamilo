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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('', 'principalController@index')->name('principal');
Route::get('registro', 'registroController@index')->name('principal_create');

Route::post('registro', 'registroController@store')->name('registro_store');

Route::get('mujer', 'mujerController@index')->name('mujer');

Route::get('niña', 'niñaController@index')->name('niña');
Route::get('envio', 'envioController@index')->name('envio');

Route::get('pedido', 'pedidoController@index')->name('pedido');


Route::resource('usuario', 'clienteController');

Route::resource('producto', 'productoController');

Route::resource('inventario', 'inventarioctoController');

Route::resource('venta', 'ventactoController');

Route::resource('envios_admin', 'envio_admiController');