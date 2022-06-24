<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\PagosController;
use App\Http\Controllers\RecetaController;
use App\Http\Controllers\ReporteController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('home');
})->middleware('auth');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('paciente',[PacienteController::class, 'index'])->name('paciente.index');
Route::get('/paciente/{id}', [PacienteController::class, 'show'])->name('paciente_show');
Route::delete('/paciente/borrar/{id}', [PacienteController::class, 'destroy'])->name('paciente.destroy');

Route::patch('/consulta/{c}', [PacienteController::class, 'update'])->name('consulta.editar');
Route::delete('/consulta/{c}', [PacienteController::class, 'delete'])->name('consulta.eliminar');

Route::get('/agenda', [CitaController::class, 'index'])->name('agenda.index');

Route::get('/recetas', [RecetaController::class, 'index'])->name('receta.index');
Route::get('/recetas/{id}',[RecetaController::class, 'show'])->name('receta_show');
Route::patch('/receta/{c}', [RecetaController::class, 'update'])->name('receta.editar');
Route::delete('/receta/{c}', [RecetaController::class, 'destroy'])->name('receta.eliminar');

Route::get('/pagos', [PagosController::class, 'index'])->name('pagos.index');
Route::patch('/pagos/{c}', [PagosController::class, 'update'])->name('pagos.editar');
Route::delete('/pagos/{c}', [PagosController::class, 'delete'])->name('pagos.eliminar');

Route::get('/reporte',[ReporteController::class, 'index'])->name('reporte.index');