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

//Equipos

Route::get('/', function () {
    return view('inicio');
});
Route::get('equipos', function () {
    return view('equipos.index');
});
Route::get('equipos/create', function () {
    return view('equipos.create');
});
Route::get('equipos/{id}', function ($id) {
    return view('equipos.show') -> with('id', $id);
});
Route::get('equipos/{id}/edit', function ($id) {
    return view('equipos.edit') -> with('id', $id);
});

//Jugadores
Route::get('jugadores', function () {
    return view('jugadores.index');
});
Route::get('jugadores/create', function () {
    return view('jugadores.create');
});
Route::get('jugadores/{id}', function ($id) {
    return view('jugadores.show') -> with('id', $id);
});
Route::get('jugadores/{id}/edit', function ($id) {
    return view('jugadores.edit') -> with('id', $id);
});


//Municipios
Route::get('municipios', function () {
    return view('municipios.index');
});
Route::get('municipios/create', function () {
    return view('municipios.create');
});
Route::get('municipios/{id}', function ($id) {
    return view('municipios.show') -> with('id', $id);
});
Route::get('municipios/{id}/edit', function ($id) {
    return view('municipios.edit') -> with('id', $id);
});


//Posiciones
Route::get('posiciones', function () {
    return view('posiciones.index');
});
Route::get('posiciones/create', function () {
    return view('posiciones.create');
});
Route::get('posiciones/{id}', function ($id) {
    return view('posiciones.show') -> with('id', $id);
});
Route::get('posiciones/{id}/edit', function ($id) {
    return view('posiciones.edit') -> with('id', $id);
});