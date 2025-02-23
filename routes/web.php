<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

// Web Routes
Route::get('/', function () {
    return view('welcome');
});

// Guest Routes
Route::middleware(['web'])->group(function () {
    Route::middleware(['guest'])->group(function () {
        Route::get('/login', [AuthenticatedSessionController::class, 'create'])
            ->name('login');
        Route::post('/login', [AuthenticatedSessionController::class, 'store']);
        
        // Use our custom AuthController for registration
        Route::get('/register', [AuthController::class, 'showRegisterForm'])
            ->name('register');
        Route::post('/register', [AuthController::class, 'register']);
    });
});

// Auth Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Static Pages Routes
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