<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\MateriaController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', InicioController::class);

Route::get('materias/index', [MateriaController::class, 'index']);

Route::get('materias/create', [MateriaController::class, 'create']);

Route::get('materias/{materia}', [MateriaController::class, 'show']);