<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\RecetaController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('home');
})->middleware('auth');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');

Route::get('paciente',[PacienteController::class, 'index'])->middleware('auth')->name('paciente.index');
Route::get('/paciente/{id}', [PacienteController::class, 'show'])->middleware('auth')->name('paciente_show');
Route::delete('/paciente/borrar/{id}', [PacienteController::class, 'destroy'])->middleware('auth')->name('paciente.destroy');

Route::patch('/consulta/{c}', [PacienteController::class, 'update'])->middleware('auth')->name('consulta.editar');
Route::delete('/consulta/{c}', [PacienteController::class, 'delete'])->middleware('auth')->name('consulta.eliminar');

Route::get('/agenda', [CitaController::class, 'index'])->middleware('auth')->name('agenda.index');

Route::get('/recetas', [RecetaController::class, 'index'])->middleware('auth')->name('receta.index');
Route::get('/recetas/{id}',[RecetaController::class, 'show'])->middleware('auth')->name('receta_show');
Route::patch('/receta/{c}', [RecetaController::class, 'update'])->middleware('auth')->name('receta.editar');
Route::delete('/receta/{c}', [RecetaController::class, 'destroy'])->middleware('auth')->name('receta.eliminar');