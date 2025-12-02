<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::view('/', 'welcome');

// Dashboard (van Breeze)
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Publiek profiel
Route::get('/profile/{id}', [ProfileController::class, 'show'])->name('profile.show');

// Ingelogde user eigen profiel bewerken
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
});

// Auth routes van Breeze
require __DIR__.'/auth.php';


