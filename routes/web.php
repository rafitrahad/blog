<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', [AuthController::class, 'index'])->name('show.home');
Route::get('/login', [AuthController::class, 'showLogin'])->name('show.login');
Route::get('/signup', [AuthController::class, 'showSignup'])->name('show.signup');
Route::post('/store', [AuthController::class, 'store'])->name('user.store');