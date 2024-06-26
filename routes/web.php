<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('products/create', [ProductController::class, 'create'])->name('products.create')->middleware('auth')->middleware('admin');
Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('products', [ProductController::class, 'store'])->name('products.store');
Route::get('products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('products/{product}', [ProductController::class, 'update'])->name('products.update');
Route::delete('products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');

// Common resource routes for authenticated users
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('products', [ProductController::class, 'index'])->name('products.index');
    Route::get('products/{product}', [ProductController::class, 'show'])->name('products.show');
});

// Admin-specific routes for managing products
// Route::middleware(['auth', 'admin'])->group(function () {
//     Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
//     Route::post('products', [ProductController::class, 'store'])->name('products.store');
//     Route::get('products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
//     Route::put('products/{product}', [ProductController::class, 'update'])->name('products.update');
//     Route::delete('products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
// });


require __DIR__.'/auth.php';
