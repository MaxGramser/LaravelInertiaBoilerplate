<?php

use Illuminate\Support\Facades\Route;

// Auth Routes
Route::get('/auth/login', [\App\Http\Controllers\AuthController::class, 'showLogin'])->name('login');
Route::get('/auth/forgot', [\App\Http\Controllers\AuthController::class, 'showForgot']);
Route::get('/auth/reset', [\App\Http\Controllers\AuthController::class, 'showReset'])->name('password.reset');
Route::get('/auth/forgot/success', [\App\Http\Controllers\AuthController::class, 'showResetNotification'])->name('auth.forgot.success');
Route::get('/auth/register', [\App\Http\Controllers\AuthController::class, 'showRegister']);


/// handling
Route::post('/auth/logout', [\App\Http\Controllers\AuthController::class, 'handleLogout']);
Route::post('/auth/forgot', [\App\Http\Controllers\AuthController::class, 'handleForgot']);
Route::post('/auth/reset', [\App\Http\Controllers\AuthController::class, 'handleReset']);
Route::post('/auth/login', [\App\Http\Controllers\AuthController::class, 'handleLogin']);
Route::post('/auth/register', [\App\Http\Controllers\AuthController::class, 'handleRegister']);
