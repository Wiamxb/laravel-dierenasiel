<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NewsItemController;
use App\Http\Controllers\Admin\FaqCategoryController;
use App\Http\Controllers\Admin\FaqItemController;
use App\Http\Controllers\FaqController;

Route::view('/', 'welcome');

Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');

Route::get('/news', [NewsItemController::class, 'index'])->name('news.index');
Route::get('/news/{newsItem}', [NewsItemController::class, 'show'])->name('news.show');

Route::get('/profile/{id}', [ProfileController::class, 'show'])->name('profile.show');

Route::view('/dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');

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

    // 🔽 DIT WAS NOG NODIG
    Route::get('/admin/faq/items/{item}/edit', [FaqItemController::class, 'edit'])
        ->name('admin.faq.items.edit');

    Route::put('/admin/faq/items/{item}', [FaqItemController::class, 'update'])
        ->name('admin.faq.items.update');

    Route::delete('/admin/faq/items/{item}', [FaqItemController::class, 'destroy'])
        ->name('admin.faq.items.destroy');

    Route::delete('/admin/faq/items/{item}', [FaqItemController::class, 'destroy'])
        ->name('admin.faq.items.destroy');

});

require __DIR__.'/auth.php';
