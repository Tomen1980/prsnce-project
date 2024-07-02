<?php

use App\Http\Controllers\absenController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UnitController;

Route::get('/', [AuthController::class, 'loginForm'])
    ->name('login')
    ->middleware('RedirectAuth');
Route::get('/register', [AuthController::class, 'registerForm'])->name('register');
Route::post('/registerAction', [AuthController::class, 'register']);

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

    Route::put('/updateProfile/{id}', [AuthController::class, 'updateProfile'])->name('updateProfile');
    Route::post('/absen', [absenController::class, 'actionAbsenMasuk']);
    Route::get('/absenpulang/{id}', [absenController::class, 'absenpulang']);
    Route::post('/absenPulangAction', [absenController::class, 'actionAbsenPulang']);
    // UNIT Fitur
    Route::get('/units', [UnitController::class, 'index']);
    Route::post('/units', [UnitController::class, 'store']);
    Route::get('/units/{id}', [UnitController::class, 'show']);
    Route::put('/units/{id}', [UnitController::class, 'update']);
    Route::delete('/units/{id}', [UnitController::class, 'destroy']);
    Route::get('/searchUnits', [UnitController::class, 'searchUnits'])->name('searchUnits');
});
