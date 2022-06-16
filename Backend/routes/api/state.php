<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('state', [StateController::class, 'index']);
Route::post('state', [StateController::class, 'store']);
Route::post('states', [StateController::class, 'storeArray']);
Route::get('state/{id}', [StateController::class, 'show']);
Route::put('state/{id}', [StateController::class, 'update']);
Route::delete('state/{id}', [StateController::class, 'destroy']);
