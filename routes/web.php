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
    return view('inicio.index');
});
Route::resource('inicio','InicioController');
Route::resource('Empresas','EmpresasController');
// DeclaracionController
Route::get('/Empresas/{idempresa}/declaracion/create','DeclaracionController@create');
route::get('/Empresas/{idempresa}/declaracion','DeclaracionController@index');
route::post('/Empresas/{idempresa}/declaracion/store','DeclaracionController@store');
route::get('/Empresas/{idempresa}/declaracion/descargar/{iddeclaracion}','DeclaracionController@show');
// ImpuestoController
route::get('/Empresas/{idempresa}/impuesto','ImpuestoController@index');
route::post('/Empresas/{idempresa}/impuesto/store','ImpuestoController@store');
// UsuarioController
Route::get('/EmpresasR/usuario','UsuarioController@index');
Route::get('/EmpresasR/usuario/create','UsuarioController@create');
Route::post('/EmpresasR/usuario/store','UsuarioController@store');
route::get('/EmpresasR/usuario/{iduser}/editar','UsuarioController@edit');
route::post('/EmpresasR/usuario/{iduser}/update','UsuarioController@update');
// Envio Mail Contacto
Route::post('/contacto/store','MailController@store');
Route::post('/postular/email','MailController@edit');

// InicioController
Route::get('/nosotros', [ "as" => "inicio.nosotros", "uses" => "InicioController@nosotros"]);
Route::get('/login', [ "as" => "inicio.login", "uses" => "InicioController@login"]);
Route::get('/servicios', [ "as" => "inicio.servicios", "uses" => "InicioController@servicios"]);
Route::get('/clientes', [ "as" => "inicio.clientes", "uses" => "InicioController@clientes"]);
Route::get('/practicas', [ "as" => "inicio.practicas", "uses" => "InicioController@practicas"]);
Route::get('/contacto', [ "as" => "inicio.contacto", "uses" => "InicioController@contacto"]);
Route::post('/login/autenticar', [ "as" => "login.autenticar", "uses" => "InicioController@autenticar"]);
Route::get('/Empresas/{idempresa}/autenticar','EmpresasController@autenticar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
