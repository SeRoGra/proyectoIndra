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
    return view('home');
})->name('home.index');

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('carga.index');

Route::get('/productos', 'App\Http\Controllers\ProductosController@index')->name('producto.index');
Route::get('/productos/{id}', 'App\Http\Controllers\ProductosController@show')->name('producto.show');
Route::get('/productos/modificar/{id}', 'App\Http\Controllers\ProductosController@edit')->name('producto.edit');
Route::post('/productos/modificar', 'App\Http\Controllers\ProductosController@update')->name('producto.update');

