<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/product-form', [ProductController::class, 'showForm'])->name('product-form');
Route::post('/process-product', [ProductController::class, 'processProduct'])->name('process-product');
Route::get('/product-result/{id}', [ProductController::class, 'showResult'])->name('product-result');
Route::get('/utama', [ProductController::class, 'utama'])->name('utama');
