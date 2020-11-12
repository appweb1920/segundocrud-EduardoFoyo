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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'PiezasController@view_create')->name('crear_vista');
Route::get('/create', 'PiezasController@create')->name('create');
Route::get('/vista/editar/{id}', 'PiezasController@view_edit')->name('vista_editar');
Route::get('/editar', 'PiezasController@edit')->name('editar');
Route::get('/elimina/{id}', 'PiezasController@destroy')->name('elimina');
Route::get('/show', 'PiezasController@show')->name('listado');
