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

Route::get('/', 'ContactoController@index')->name('inicio');
Route::post('/guardaContacto', 'ContactoController@store')->name('guardarContacto');
Route::get('/eliminar-contacto/{id}','ContactoController@destroy')->name('eliminar.contacto');

