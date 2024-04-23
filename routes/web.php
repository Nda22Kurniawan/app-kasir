<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;

// HALAMAN LOGIN
Route::get('/', [LoginController::class, 'index']);
Route::post('/login_proses', [LoginController::class, 'login_proses']);
Route::get('/logout', [LoginController::class, 'logout']);

// HALAMAN DASHBOARD
Route::get('/dashboard', [HomeController::class, 'dashboard']);

