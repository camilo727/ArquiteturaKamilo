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
/* es esta la ruta que me redireciona al controlador de home y es la primera
que se egecuta por defecto  */
// Route::resource('/','App\Http\Controllers\homeController');
/* esta ruta me redirecionaal comntrolador de niñas */
// Route::resource('niña','App\Http\Controllers\chicaController');
/* esta ruta me redirecionaal comntrolador de mujer */
// Route::resource('mujer','App\Http\Controllers\mujerController');
/* esta ruta me redirecionaal comntrolador de pedido */
// Route::resource('pedidos','App\Http\Controllers\pedidoController');
/* esta ruta me redirecionaal comntrolador de envio */
// Route::resource('envio','App\Http\Controllers\envioController');
/* esta ruta me redirecionaal comntrolador de compra */
// Route::resource('compra','App\Http\Controllers\compraController');
Route::get('/', function () {
     return view('cliente/home/home');
 });
 
 Route::get('/niña', function () {
     return view('cliente/home/niña');
 });
 Route::get('/mujer', function () {
     return view('cliente/home/mujer');
 });
 Route::get('/pedidos', function () {
     return view('cliente/home/pedidos');
 });
 Route::get('/envio', function () {
     return view('cliente/home/envio');
 });
 Route::get('/compra', function () {
     return view('cliente/home/compra');
 });
