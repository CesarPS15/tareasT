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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('tarea','TareaController');
Route::resource('equipo', 'EquipoController')->only(['index', 'edit', 'update']);

//Route::get('prueba/{nombre?}', function($nombre = 'desconocido'){
  //$nombre = strtoupper($nombre);
  //return view('vista-prueba')->with(['nombre'=> $nombre]);
//});
