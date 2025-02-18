<?php
use App\Http\Controllers\AuthController;

Route::post('/login', [AuthController::class, 'apiLogin']);
Route::post('/register', [AuthController::class, 'apiRegister']);
Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'apiLogout']); 