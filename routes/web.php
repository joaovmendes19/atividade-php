<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource("estudante", App\Http\Controllers\EstudanteController::class);

Route::resource("professor", App\Http\Controllers\ProfessorController::class);

Route::resource("disciplina", App\Http\Controllers\DisciplinaController::class);
