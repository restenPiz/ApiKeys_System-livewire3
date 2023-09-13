<?php

use App\Http\Controllers\apiController\authController;
use App\Http\Controllers\ProfileController;
use App\Livewire\Dashboard;
use Illuminate\Support\Facades\Route;

//!Inicio das rotas do meu sistema

Route::get('/', [authController::class, 'login'])->name('login');
Route::get('/signOut', [authController::class, 'register'])->name('sign');

//?Rota responsavel por abrir o dashboard que e um componente livewire

Route::get('/dashboard', Dashboard::class);

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
