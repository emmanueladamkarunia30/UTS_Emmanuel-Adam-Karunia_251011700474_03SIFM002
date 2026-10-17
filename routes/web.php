<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShoeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

// Halaman Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Halaman daftar sepatu
Route::get('/shoes', [ShoeController::class, 'index'])->name('shoes.index');

// Halaman detail sepatu
Route::get('/shoes/{id}', [ShoeController::class, 'show'])->name('shoes.show');

// Halaman kategori
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

// Halaman tentang StepUp
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Halaman kontak
Route::get('/contact', [ContactController::class, 'index'])->name('contact');