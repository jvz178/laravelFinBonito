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

Route::group(['middleware' => 'auth'], function () {
// Route::group(['middleware' => 'admin'], function () {

<<<<<<< HEAD
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
=======
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

});

>>>>>>> 740ad035d45746fd34d71a190e77882cdc24b1ff
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
