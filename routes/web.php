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
    return view('Welcome');
});



Route::get('/general', function () {
    return view('General');
});

Route::get('/formulario', function () {

    return view('formulario');
    
});


Route::post('formulario' , 'LogicaController@gestionMatriz');

