<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\PasswordResetController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\CartController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', function () {
    return view('product');
});

Route::get('/how-its-made', function () {
    return view('how-its-made');
});

Route::get('/our-story', function () {
    return view('our-story');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/contact', function () {
    return view('contact');
});

// Authentication Routes
Route::middleware('guest')->group(function () {
    // Login Routes
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    // Registration Routes
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);

    // Password Reset Routes
    Route::get('/forgot-password', [PasswordResetController::class, 'showForgotPasswordForm'])->name('password.request');
    Route::post('/forgot-password', [PasswordResetController::class, 'sendResetLink'])->name('password.email');
    Route::get('/reset-password/{token}', [PasswordResetController::class, 'showResetPasswordForm'])->name('password.reset');
    Route::post('/reset-password', [PasswordResetController::class, 'resetPassword'])->name('password.update');

    // Google OAuth Routes
    Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.redirect');
    Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('google.callback');
});

// Authenticated Routes
Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Dashboard or protected routes can go here
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

    // Cart Routes
    Route::prefix('cart')->name('cart.')->group(function () {
        Route::get('/', [CartController::class, 'index'])->name('index');
        Route::post('/add', [CartController::class, 'store'])->name('add');
        Route::put('/{id}', [CartController::class, 'update'])->name('update');
        Route::delete('/{id}', [CartController::class, 'destroy'])->name('remove');
        Route::delete('/', [CartController::class, 'clear'])->name('clear');
        Route::get('/count', [CartController::class, 'count'])->name('count');
        Route::post('/sync', [CartController::class, 'sync'])->name('sync');
    });
});

// Public Cart Routes (for guest users to get count)
Route::get('/cart/count', function () {
    return response()->json(['count' => 0]);
})->name('cart.public.count');
