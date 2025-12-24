<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NewsItemController;
use App\Http\Controllers\Admin\FaqCategoryController;
use App\Http\Controllers\Admin\FaqItemController;
use App\Http\Controllers\Admin\ContactMessageController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ContactController;

// Publieke routes
Route::view('/', 'welcome');

// Nieuws routes
Route::get('/news', [NewsItemController::class, 'index'])->name('news.index');
Route::get('/news/{newsItem}', [NewsItemController::class, 'show'])->name('news.show');

// FAQ routes
Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');

// Contact routes
Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Publiek profiel bekijken
Route::get('/profile/{id}', [ProfileController::class, 'show'])->name('profile.show');

// Dashboard route
Route::get('/dashboard', function () {

    // Admin wordt doorgestuurd naar admin dashboard
    if (auth()->check() && auth()->user()->is_admin) {
        return redirect()->route('admin.dashboard');
    }

    // Normale gebruikers dashboard
    return view('dashboard');

})->middleware(['auth', 'verified'])->name('dashboard');

// Routes voor ingelogde gebruikers
Route::middleware(['auth'])->group(function () {

    // Profiel bewerken
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');

});

// Admin routes
Route::middleware(['auth', 'admin'])->group(function () {

    // Admin dashboard
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])
        ->name('admin.dashboard');

    // Gebruikers beheren
    Route::get('/admin/users', [UserController::class, 'index'])
        ->name('admin.users.index');

    // Nieuws beheren
    Route::get('/admin/news/create', [NewsItemController::class, 'create'])->name('news.create');
    Route::post('/admin/news', [NewsItemController::class, 'store'])->name('news.store');
    Route::get('/admin/news/{newsItem}/edit', [NewsItemController::class, 'edit'])->name('news.edit');
    Route::put('/admin/news/{newsItem}', [NewsItemController::class, 'update'])->name('news.update');
    Route::delete('/admin/news/{newsItem}', [NewsItemController::class, 'destroy'])->name('news.destroy');

    // FAQ categorieën
    Route::get('/admin/faq/categories', [FaqCategoryController::class, 'index'])
        ->name('admin.faq.categories.index');
    Route::get('/admin/faq/categories/create', [FaqCategoryController::class, 'create'])
        ->name('admin.faq.categories.create');
    Route::post('/admin/faq/categories', [FaqCategoryController::class, 'store'])
        ->name('admin.faq.categories.store');

    // FAQ items
    Route::get('/admin/faq/items', [FaqItemController::class, 'index'])
        ->name('admin.faq.items.index');
    Route::get('/admin/faq/items/create', [FaqItemController::class, 'create'])
        ->name('admin.faq.items.create');
    Route::post('/admin/faq/items', [FaqItemController::class, 'store'])
        ->name('admin.faq.items.store');
    Route::get('/admin/faq/items/{item}/edit', [FaqItemController::class, 'edit'])
        ->name('admin.faq.items.edit');
    Route::put('/admin/faq/items/{item}', [FaqItemController::class, 'update'])
        ->name('admin.faq.items.update');
    Route::delete('/admin/faq/items/{item}', [FaqItemController::class, 'destroy'])
        ->name('admin.faq.items.destroy');

    // Contactberichten
    Route::get('/admin/contact', [ContactMessageController::class, 'index'])
        ->name('admin.contact.index');
    Route::delete('/admin/contact/{message}', [ContactMessageController::class, 'destroy'])
        ->name('admin.contact.destroy');
});

// Auth routes (login, register, ...)
require __DIR__ . '/auth.php';
