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
Route::get('/search', [ContactController::class,'search'])->name('search');
Route::get('/refund_policy', [ContactController::class,'refund_policy'])->name('refund_policy');
Route::get('/privacy_policy', [ContactController::class,'privacy_policy'])->name('privacy_policy');
Route::get('/term_of_service', [ContactController::class,'term_of_service'])->name('term_of_service');





















Route::get('/welcome', function () {
    return view('welcome');
});
