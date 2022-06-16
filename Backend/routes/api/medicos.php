<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicosController;

Route::post('medicos', [MedicosController::class, 'medicos']);
