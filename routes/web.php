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

// Route::resource('/','App\Http\Controllers\homeController');
// Route::resource('niña','App\Http\Controllers\chicaController');
// Route::resource('mujer','App\Http\Controllers\mujerController');
// Route::resource('pedidos','App\Http\Controllers\pedidoController');
// Route::resource('envio','App\Http\Controllers\envioController');
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
