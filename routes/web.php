<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PacienteController;
use App\Models\Paciente;

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
    return view('home');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('paciente',[PacienteController::class, 'index'])->name('paciente.index');
Route::get('/paciente/{id}', [PacienteController::class, 'show'])->name('paciente_show');
Route::delete('/paciente/borrar/{id}', [PacienteController::class, 'destroy'])->name('paciente.destroy');
Route::patch('/consulta/{c}', [PacienteController::class, 'update'])->name('consulta.editar');
Route::delete('/consulta/{c}', [PacienteController::class, 'delete'])->name('consulta.eliminar');