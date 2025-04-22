<?php

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class,'index'])->name('home');
Route::get('/catalog', [CatalogController::class,'catalog'])->name('catalog');
Route::get('/cart', [CatalogController::class,'cart'])->name('cart');





















Route::get('/welcome', function () {
    return view('welcome');
});