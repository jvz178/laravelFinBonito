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
    return view('auth/login');
});


// Route::group(['middleware' => 'admin'], function () {

Route::get('/acciones/gestion', 'UsuarioController@accesoGestion');
Route::get('/acciones/gestion/filtro', 'UsuarioController@accesoGestionFiltrado');
Route::get('/acciones/gestion/filtro2', 'UsuarioController@accesoGestionFiltrado2');
Route::get('usuario/{id}','UsuarioController@cambiar');
Route::get('acciones/vistaEmail','EmailController@accederEmail');
Route::post('acciones/vistaEmail/enviarEmail', 'EmailController@enviarEmail')->name('enviar');
Route::get('informes', 'InformesController@general');
Route::get('informes/ofertas', 'InformesController@informeOferta')->name('pdf');
// Route::get('informes/oferta2', 'InformesController@informeAlumnos')->name('pdf');
Route::get('informes/oferta4', 'InformesController@listadoAlumnos')->name('pdf');
Route::get('informes/oferta3', 'InformesController@ofertasCiclo')->name('pdf');
Route::resource('/noticias', 'NoticiaController');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// });
