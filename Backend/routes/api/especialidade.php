<?php

use App\Http\Controllers\EspecialidadeController;
use Illuminate\Support\Facades\Route;


Route::get('', [EspecialidadeController::class, 'index']);
Route::post('', [EspecialidadeController::class, 'store']);
Route::delete('/{id}', [EspecialidadeController::class, 'destroy']);
Route::put('/{id}', [EspecialidadeController::class, 'update']);
Route::get('/{id}', [EspecialidadeController::class, 'show']);
