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
Route::get('/productos/crear', 'App\Http\Controllers\ProductosController@create')->name('producto.create');
Route::post('/productos', 'App\Http\Controllers\ProductosController@store')->name('producto.store');
Route::get('/productos/{id}', 'App\Http\Controllers\ProductosController@show')->name('producto.show');
Route::get('/productos/modificar/{id}', 'App\Http\Controllers\ProductosController@edit')->name('producto.edit');
Route::patch('/productos/modificar', 'App\Http\Controllers\ProductosController@update')->name('producto.update');
Route::delete('/productos/eliminar', 'App\Http\Controllers\ProductosController@destroy')->name('producto.destroy');

Route::get('/usuarios', 'App\Http\Controllers\UserController@index')->name('usuario.index');
Route::get('/usuarios/crear', 'App\Http\Controllers\UserController@create')->name('usuario.create');
Route::post('/usuarios', 'App\Http\Controllers\UserController@store')->name('usuario.store');
Route::get('/usuarios/{id}', 'App\Http\Controllers\UserController@show')->name('usuario.show');
Route::get('/usuarios/modificar/{id}', 'App\Http\Controllers\UserController@edit')->name('usuario.edit');
Route::patch('/usuarios/modificar', 'App\Http\Controllers\UserController@update')->name('usuario.update');
Route::delete('/usuarios/eliminar', 'App\Http\Controllers\UserController@destroy')->name('usuario.destroy');