<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;



Route::post('login', [AuthController::class, 'login']);

Route::group(['Middleware' => ['jwt.verify']], function () {
    route::prefix('auth')->group(base_path('routes/api/auth.php'));
    route::prefix('state')->group(base_path('routes/api/state.php'));
    route::prefix('user')->group(base_path('routes/api/user.php'));
    route::prefix('medico')->group(base_path('routes/api/medico.php'));
    route::prefix('especialidade')->group(base_path('routes/api/especialidade.php'));
});
