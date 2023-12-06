<?php


use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ProductController::class, 'index'])->name('home');
Route::get('/product-form', [ProductController::class, 'showForm'])->name('process');
Route::post('/process-product', [ProductController::class, 'processProduct'])->name('process-product');
Route::get('/product-result/{id}', [ProductController::class, 'showResult'])->name('product-result');
Route::get('/utama', [ProductController::class, 'utama'])->name('utama');
Route::get('/edit-form/{id}', [ProductController::class, 'editForm'])->name('edit.form');
Route::post('/edit-form/{id}', [ProductController::class, 'edit'])->name('edit');
Route::get('/delete/{id}',  [ProductController::class, 'delete'])->name('delete');