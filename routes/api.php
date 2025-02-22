<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// API Routes tanpa prefix 'api'
Route::post('login', [AuthController::class, 'apiLogin']);
Route::post('register', [AuthController::class, 'apiRegister']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('logout', [AuthController::class, 'apiLogout']);
    Route::get('user', function (Request $request) {
        return $request->user();
    });
}); 