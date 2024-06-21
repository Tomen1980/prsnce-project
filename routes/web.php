<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', [AuthController::class, 'loginForm'])->name('login');
<<<<<<< HEAD
Route::get('/register', [AuthController::class, 'registerForm'])->name('register');

=======
Route::post('/loginAction', [AuthController::class, 'loginAuth']);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [AuthController::class, 'dashboard']);
});
>>>>>>> origin/staging
