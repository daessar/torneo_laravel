<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\inicioController;
use App\Http\Controllers\EquiposController;
use App\Http\Controllers\JugadoresController;
use App\Http\Controllers\MunicipiosController;
use App\Http\Controllers\PosicionesController;


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

//Inicio
Route::get('/', [inicioController::class, 'index']);

//Equipos
Route::resource('equipos', EquiposController::class);

//Jugadores
Route::resource('jugadores', JugadoresController::class);

//Municipios
Route::resource('municipios', MunicipiosController::class);

//Posiciones
Route::resource('posiciones', PosicionesController::class);