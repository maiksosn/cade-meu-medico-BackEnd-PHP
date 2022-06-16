<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('me', [AuthController::class, 'me']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('refresh', [AuthController::class, 'refresh']);
