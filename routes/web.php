<?php

use App\Http\Controllers\RegistroHistoricoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/sistema','admin.index')->name('sistema');
Route::get('/asistente', [RegistroHistoricoController::class, 'index']);
Route::post('/asistente', [RegistroHistoricoController::class, 'store']);

