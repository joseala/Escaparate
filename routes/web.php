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



Auth::routes();

Route::get('/', 'CategoriasController@index');
Route::get('/categorias/{id}', 'CategoriasController@show');
Route::get('/categorias/{idc}/productos/{idp}', 'ProductosController@show');
Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');
Route::get('/mapas', 'SoapController@index');

Route::resource('categorias', 'CategoriasController');
Route::resource('categorias.productos', 'ProductosController');


