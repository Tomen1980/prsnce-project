<?php

use App\Http\Controllers\absenController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', [AuthController::class, 'loginForm'])->name('login');
Route::get('/register', [AuthController::class, 'registerForm'])->name('register');
Route::post('/registerAction', [AuthController::class, 'register']);

Route::post('/loginAction', [AuthController::class, 'loginAuth']);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [AuthController::class, 'dashboard']);
});
<<<<<<< HEAD

Route::get("/formPeserta", function () {
    return view('formPeserta');
});
=======
Route::get('/absenpulang', [AuthController::class, 'absenpulang']);
Route::post('/absenpulangAction', [absenController::class, 'absenpulang']);
>>>>>>> fadlan
