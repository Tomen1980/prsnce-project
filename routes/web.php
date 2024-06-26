<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

Route::get('/', [AuthController::class, 'loginForm'])
    ->name('login')
    ->middleware('RedirectAuth');
Route::get('/register', [AuthController::class, 'registerForm'])->name('register');
Route::post('/loginAction', [AuthController::class, 'loginAuth']);

Route::middleware(['auth', 'AutoLogoutAuth'])->group(function () {
    Route::get('/dashboard', [AuthController::class, 'dashboard']);
    Route::delete('/logout', [AuthController::class, 'logout']);
    Route::get('/formPeserta', [UserController::class, 'create'])->middleware('RoleAuthenticated');
    Route::get('/searchPeserta', [UserController::class, 'searchPeserta'])
        ->name('searchPeserta')
        ->middleware('RoleAuthenticated');
    Route::post('/addPeserta', [UserController::class, 'store'])
        ->name('addPeserta')
        ->middleware('RoleAuthenticated');
    Route::get('/listPeserta', [UserController::class, 'index'])
        ->name('listPeserta')
        ->middleware('RoleAuthenticated');
    Route::delete('/deletePeserta/{id}', [UserController::class, 'destroy'])
        ->name('deletePeserta')
        ->middleware('RoleAuthenticated');
    Route::get('/detailPeserta/{id}', [UserController::class, 'show'])
        ->name('detailPeserta')
        ->middleware('RoleAuthenticated');
    Route::put('/updatePeserta/{id}', [UserController::class, 'update'])
        ->name('updatePeserta')
        ->middleware('RoleAuthenticated');
});
