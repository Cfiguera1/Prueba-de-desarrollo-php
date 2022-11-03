<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PruebaController;
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

Route::get('prueba', [PruebaController::class, 'index'])->name('prueba.index');
Route::post('prueba/buscar',[PruebaController::class, 'buscar'])->name('prueba.buscar');
Route::post('prueba', [PruebaController::class, 'registrar'])->name('prueba.registrar');
Route::get('prueba/eliminar/{id}',[PruebaController::class, 'eliminar'])->name('prueba.eliminar');
Route::get('prueba/editar/{id}',[PruebaController::class, 'editar'])->name('prueba.editar');
Route::post('prueba/actualizar',[PruebaController::class, 'actualizar'])->name('prueba.actualizar');
