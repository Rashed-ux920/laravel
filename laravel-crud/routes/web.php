<?php

use App\Http\Controllers\productcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', [productcontroller::class, 'index'])->name('product.index');
Route::get('/create', [productcontroller::class, 'create'])->name('product.create');
Route::post('/product/store', [productcontroller::class, 'store'])->name('store');
Route::get('product/{id}/edit', [productcontroller::class, 'edit']);
Route::put('product/{id}/update', [productcontroller::class, 'update']);
