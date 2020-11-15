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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuario/createUsuario','UsuarioController@createUsuario');
Route::post('/usuario/createUsuario','UsuarioController@saveUsuario');
Route::get('/usuario/login','UsuarioController@login');
Route::post('/usuario/login','UsuarioController@validationLogin');
Route::get('/emocao','EmocaoController@getSentimento');
Route::get('/emocao/createEmocao','EmocaoController@createEmocao');
Route::post('/emocao/createEmocao','EmocaoController@saveEmocao');
