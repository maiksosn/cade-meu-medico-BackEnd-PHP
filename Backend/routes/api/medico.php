<?php

use App\Http\Controllers\MedicoController;
use Illuminate\Support\Facades\Route;


Route::get('', [MedicoController::class, 'index']);
Route::post('', [MedicoController::class, 'store']);
Route::delete('/{id}', [MedicoController::class, 'destroy']);
Route::put('/{id}', [MedicoController::class, 'update']);
