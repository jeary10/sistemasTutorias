<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\SessionTutoriaController;
use App\Http\Controllers\OpinionController;
Route::get('/', function () {
    return view('welcome');
})->name('home');




Route::resource('session-tutorias', SessionTutoriaController::class);
Route::resource('opinions', OpinionController::class);
Route::resource('usuarios', UsuarioController::class);
Route::resource('horarios', HorarioController::class);

