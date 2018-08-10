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

// ///////////////////////////////////////preregistro/////////////////////////
Route::get('/preregistro', 'PreregistroController@create')->name('preregistro.create'); //ver formulario
Route::post('/preregistro/store', 'PreregistroController@store')->name('preregistro.store'); //registar

Route::get('/direcciones', 'PreregistroController@direcciones')->name('direcciones.uat');
Route::get('/filtro-uat', 'PreregistroController@filtroUat')->name('filtro.uat');

/*--------------------Rutas para generar el RFC----------------------------------*/
Route::post('rfc-moral', 'PreregistroAuxController@rfcMoral')->name('rfc.moral');
Route::post('rfc-fisico', 'PreregistroAuxController@rfcFisico')->name('rfc.fisico');

/*---------correo------------*/
Route::get('correo', 'PreregistroAuxController@boton');
//Route::post('correo/enviar', 'PreregistroAuxController@enviar')->name('correo');
Route::post('enviar/correo', 'PreregistroController@enviar')->name('envio');

/*---------Rutas para los selects dinámicos-------------*/
Route::get('municipios/{id}', 'RegisterController@getMunicipios')->name('get.municipio');
Route::get('localidades/{id}', 'RegisterController@getLocalidades')->name('get.localidad');
Route::get('codigos/{id}', 'RegisterController@getCodigos')->name('get.codigo');
Route::get('colonias/{cp}', 'RegisterController@getColonias')->name('get.colonia');
Route::get('colonias2/{id}', 'RegisterController@getColonias2')->name('get.colonia2');
Route::get('codigos2/{id}', 'RegisterController@getCodigos2')->name('get.codigo2');
Route::get('listas/{id}', 'RegisterController@getListas')->name('get.listas');
Route::get('fiscales/{id}', 'RegisterController@getFiscales')->name('get.fiscales');
/********************generar pdf**********************************/
Route::get('FormatoRegistro/{id}', 'PdfController@datos');

Route::get('getDelitoAjax/{id}', 'RegisterController@getDelitoAjax')->name("getDelitoAjax");
