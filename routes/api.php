<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();

});

Route::post('register', 'API\RegisterController@register');
Route::post('login', 'API\RegisterController@login');
// Route::post('logout', 'API\RegisterController@logout');


Route::middleware('auth:api')->group( function () {
    Route::resource('noticias', 'API\NoticiasController');
    Route::resource('ofertas', 'API\OfertasController');
    Route::resource('ciclos', 'API\CiclosController');
    Route::resource('aplicas', 'API\AplicaController');
    Route::resource('users', 'API\UsuariosController');
});


    


