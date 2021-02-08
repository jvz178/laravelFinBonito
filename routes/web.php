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

Route::get('gestion', 'UsuarioController@accesoGestion')->name("gestion");
//Route::get('gestion', 'UsuarioController@accesoGestion2')->name("gestion2");
Route::get('filtro', 'UsuarioController@accesoGestionFiltrado');
Route::get('filtro2', 'UsuarioController@accesoGestionFiltrado2');
Route::get('usuario/{id}','UsuarioController@cambiar');
Route::get('vistaEmail','EmailController@accederEmail');
Route::post('vistaEmail/enviarEmail', 'EmailController@enviarEmail')->name('enviar');
Route::get('Error','EmailController@mostrarError');
Route::get('informes', 'InformesController@general');
Route::get('informes/ofertas', 'InformesController@informeOferta')->name('pdf');
// Route::get('informes/oferta2', 'InformesController@informeAlumnos')->name('pdf');
Route::get('informes/oferta4', 'InformesController@listadoAlumnos')->name('pdf');
Route::get('informes/oferta3', 'InformesController@ofertasCiclo')->name('pdf');
Route::resource('/noticias', 'NoticiaController');
//Rutas pruebas
Route::get('/users', 'UsuarioController@index');
//
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// });
