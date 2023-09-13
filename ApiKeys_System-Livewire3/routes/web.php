<?php

use App\Http\Controllers\apiController\authController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//!Inicio das rotas do meu sistema

Route::get('/', [authController::class, 'login'])->name('login');
Route::get('/register', [authController::class, 'register'])->name('register-page');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
