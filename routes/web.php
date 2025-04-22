<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class,'index'])->name('home');
Route::get('/catalog', [CatalogController::class,'catalog'])->name('catalog');
Route::get('/cart', [CartController::class,'cart'])->name('cart');
Route::get('/contact', [ContactController::class,'contact'])->name('contact');





















Route::get('/welcome', function () {
    return view('welcome');
});
