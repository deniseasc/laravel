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

Route::group(["prefix"=>"ex1"], function(){

    Route::get('rota1', function () {
        return '<h1> Esta é a rota 1 </h1> <a href="./rota2"> <button> Próxima Rota</button>';
    });
    
    Route::get('rota2', function () {
        return '<h1> Esta é a rota 2 </h1> <a href="./rota3"> <button> Próxima Rota</button>';
    });
    
    Route::get('rota3', function () {
        return '<h1> Esta é a rota 3 </h1> <a href="./rota1"> <button> Voltar </button>';
    });

});