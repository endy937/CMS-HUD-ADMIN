<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

// 🔹 Login API untuk React/Android
Route::post('/login', [AuthController::class, 'login']);

// 🔹 Hanya user yang sudah login (punya token) yang bisa akses
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/me', [AuthController::class, 'me']);
    Route::post('/logout', [AuthController::class, 'logout']);
});
