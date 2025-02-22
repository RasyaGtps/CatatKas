<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;

// Web Routes
Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['web'])->group(function () {
    Route::get('/', [AuthController::class, 'showLogin'])->name('login');
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// API Routes untuk Login
Route::prefix('api')->group(function () {
    Route::post('/login', [AuthController::class, 'apiLogin'])->name('api.login');
});

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/articles/tax', function () {
    return view('articles.tax');
})->name('articles.tax');

Route::get('/customer-service', function () {
    return view('components.customer-service');
})->name('customer.service');

Route::get('/privacy-policy', function () {
    return view('components.privacy-policy');
})->name('privacy.policy');

Route::get('/terms-and-conditions', function () {
    return view('components.terms-and-conditions');
})->name('terms.conditions');

Route::get('/online-features', function () {
    return view('components.online-features');
})->name('online.features');

Route::get('/services', function () {
    return view('components.services');
})->name('services');

Route::get('/training-workshop', function () {
    return view('components.training-workshop');
})->name('training.workshop');

Route::get('/business-consultation', function () {
    return view('components.business-consultation');
})->name('business.consultation');

Route::get('/financial-planning', function () {
    return view('components.financial-planning');
})->name('financial.planning');

Route::get('/tax-consultation', function () {
    return view('components.tax-consultation');
})->name('tax.consultation');

require __DIR__.'/auth.php';