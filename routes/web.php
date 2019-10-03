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

Route::get('/rota1', function () {
    return '<h1> Esta é a rota 1 </h1>';
});

Route::get('/rota2', function () {
    return '<h1> Esta é a rota 2 </h1>';
});

Route::get('/rota3', function () {
    return '<h1> Esta é a rota 3 </h1>';
});
