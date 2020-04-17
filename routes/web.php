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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/saluda/{nom}', 'PeliculaController@prova');
/*
Route::get('/saluda/{nom}', function ($nom) {
    return view('saludo', array('usuari'=>$nom));
});
*/

Route::get('/', function () {
    return view('inici');
});

Route::get('/llista', function () {
    return view('llista');
});

Route::get('/contactar', function () {
    return view('contactar');
});

Route::get('user/{name}', function ($name) {
    return "Hola Mundo!! Benvingut " . $name;
})->where('name', '[A-Za-z]+');

Route::get('user/{id}', function ($id) {
    return "Hola Mundo!! Benvingut user con id " . $id;
})->where('id', '[0-9]+');
