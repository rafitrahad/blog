<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;

Route::get('/', [AuthController::class, 'index'])->name('show.home');
Route::get('/login', [AuthController::class, 'showLogin'])->name('show.login');
Route::get('/signup', [AuthController::class, 'showSignup'])->name('show.signup');
Route::post('/user/store', [AuthController::class, 'store'])->name('user.store');

route::get('/post/store', [PostController::class, 'show_store'])->name('show.store');
route::post('/post/store', [PostController::class, 'store'])->name('post.store');
route::get('/post/show', [PostController::class,'showPost'])->name('show.post');
