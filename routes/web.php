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

Route::get('fotos/{numero?}', function ($numero = "sin número") {

    return "Estás en la galería de fotos: {$numero}";

})->where("numero", "[0-9]+");

Route::view('/galeria', 'fotos');