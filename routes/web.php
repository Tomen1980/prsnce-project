<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', [AuthController::class, 'loginForm'])->name('login');

<<<<<<< HEAD
Route::get('/', function () {
    return view('index');
});
Route::get('/register', function () {
    return view('register');
});
=======
>>>>>>> baed320d0758f315858516a22a5dd0f0f3a46427
