<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ControllerProfile;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('auth.login');
});

// Semua route yang butuh autentikasi
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    // 🔹 Route untuk Profile 
    Route::get('profiles', [ControllerProfile::class, 'index'])->name('profile_index');
    Route::get('profiles/{id}', [ControllerProfile::class, 'edit'])->name('profile_edit');
    Route::get('create', [ControllerProfile::class, 'create'])->name('profile_create');
    Route::post('profiles', [ControllerProfile::class, 'store'])->name('profile_store');
    Route::delete('profiles/{id}/delete', [ControllerProfile::class, 'destroy'])->name('profile_delete');

    // Dashboard utama
    Route::get('/dashboard', function () {
        return view('dashboard.pages.index');
    })->name('dashboard');

    // Semua route dengan prefix dashboard
    Route::prefix('dashboard')->name('dashboard.')->group(function () {

        // Users Management
        Route::prefix('users')->name('users.')->group(function () {
            Route::get('/', [UserController::class, 'index'])->name('index');       // List users
            Route::get('/create', [UserController::class, 'create'])->name('create'); // Form create
            Route::post('/create', [UserController::class, 'store'])->name('store');
            Route::get('/{id}/edit', [UserController::class, 'edit'])->name('edit'); // Form edit
            Route::put('/{id}', [UserController::class, 'update'])->name('update');  // Submit update
            Route::delete('/{id}', [UserController::class, 'destroy'])->name('destroy'); // Delete user

            Route::get('/{id}/account', [UserController::class, 'account'])->name('account');
        });

        // Roles Management
        Route::get('/roles', function () {
            return view('dashboard.pages.management.roles.index');
        })->name('roles');

        // Permissions Management
        Route::get('/permissions', function () {
            return view('dashboard.pages.management.permissions.index');
        })->name('permissions');
    });
});