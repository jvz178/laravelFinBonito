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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/acciones/gestion', 'UsuarioController@accesoGestion');
Route::get('/acciones/gestion/filtro', 'UsuarioController@accesoGestionFiltrado');
Route::get('/acciones/gestion/filtro2', 'UsuarioController@accesoGestionFiltrado2');
Route::patch('/acciones/gestion','UsuarioController@cambiar');
Route::post('/enviarEmail', 'UsuarioController@enviarEmail')->name('enviarEmail');
Route::get('informes', 'InformesController@informeOferta')->name('pdf');
Route::resource('/noticias', 'NoticiaController');

Auth::routes();