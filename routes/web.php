<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;

Route::resource('products', ProductController::class);

Route::get('/', [SiteController::class, 'index'])->name('site.index');

Route::get('/produto/{slug}', [SiteController::class, 'details'])->name('site.details');

Route::get('/category/{id}', [SiteController::class,'category'])->name('site.category');

Route::get('/cart', [SiteController::class, 'cartList'])->name('site.cart');

