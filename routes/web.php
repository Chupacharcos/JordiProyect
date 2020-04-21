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

Route::get('/llista', 'PeliculaController@llista');

Route::get('/contactar', function () {
    return view('contactar');
});


//-------------------------------------------->BBDD ORM
//SELECT
Route::get('/consulta/{id}', function ($id) {
    //PAGINA 11 PDF ORM ELOQUENT
    //$peli = App\Pelicula::where('ID',1)->get();
    $peli = App\Pelicula::where('ID', $id)->get();
    return view('pelicula', array('pelicula' => $peli[0]));
});
//INSERT
Route::get('/insertar', function () {
    $peli = new App\Pelicula;
    $peli->ID = 2001;
    $peli->TITULO = 'Laravel contraataca';
    $peli->ANYO = 2020;
    $peli->PUNTUACION = 10;
    $peli->VOTOS = 1;
    $peli->save();
});
//UPDATE
Route::get('/modificar', function () {
    $peli = App\Pelicula::find(2001);
    $peli->TITULO = 'El retorno de Laravel';
    $peli->VOTOS = 2;
    $peli->save();
});
//DELETE
Route::get('/eliminar', function () {
    $peli = App\Pelicula::find(2001);
    $peli->delete();
});
/* DELETE DIRECTO
Route::get('/eliminar', function(){
    App\Pelicula::destroy(2001);
});
*/
/* DELETE MULTIPLE
Route::get('/eliminar', function(){
   $deletedRows = App\Pelicula::where(PUNTUACION', 0)->delete();
});
*/
//---------------------------------------->BBDD ORM

//---------------------------------------->BBDD NORMAL
Route::get('/pelicula/{id}', 'PeliculaController@consulta');
Route::get('/nueva', function () {
    \DB::insert("insert into pelicula (ID, TITULO, ANYO, PUNTUACION, VOTOS) VALUES (?,?,?,?,?)",
        [2000, 'Laravel', 2020, 10, 1]);
});
Route::get('/modifica', function () {
    \DB::update("update pelicula set titulo=? where ID=2000", ['Laravel rules']);
});
Route::get('/borra', function () {
    \DB::delete("delete from pelicula where ID=2000");
});

//---------------------------------------->BBDD NORMAL


Route::get('user/{name}', function ($name) {
    return "Hola Mundo!! Benvingut " . $name;
})->where('name', '[A-Za-z]+');

Route::get('user/{id}', function ($id) {
    return "Hola Mundo!! Benvingut user con id " . $id;
})->where('id', '[0-9]+');
