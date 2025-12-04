<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NewsItemController;

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

// Publiek nieuws
Route::get('/news', [NewsItemController::class, 'index'])->name('news.index');
Route::get('/news/{newsItem}', [NewsItemController::class, 'show'])->name('news.show');

// Admin (ingelogd)
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/news/create', [NewsItemController::class, 'create'])->name('news.create');
    Route::post('/admin/news', [NewsItemController::class, 'store'])->name('news.store');
    Route::get('/admin/news/{newsItem}/edit', [NewsItemController::class, 'edit'])->name('news.edit');
    Route::put('/admin/news/{newsItem}', [NewsItemController::class, 'update'])->name('news.update');
    Route::delete('/admin/news/{newsItem}', [NewsItemController::class, 'destroy'])->name('news.destroy');
});

// Auth routes van Breeze
require __DIR__.'/auth.php';

