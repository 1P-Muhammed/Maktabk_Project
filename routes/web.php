<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\ProductDetailsController;
use App\Http\Controllers\RefundPolicyController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TermsOfServiceController;
use Illuminate\Support\Facades\Route;


Route::get('/login', [RegisterController::class, 'showLogin'])->name('login');
Route::post('/login', [RegisterController::class, 'login'])->name('login');



Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/catalog', [CatalogController::class, 'catalog'])->name('catalog');
Route::get('/cart', [CartController::class, 'cart'])->name('cart');
Route::get('/cart2', [CartController::class, 'cart2'])->name('cart2');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::get('/search', [SearchController::class, 'search'])->name('search');
Route::get('/refund_policy', [RefundPolicyController::class, 'refund_policy'])->name('refund_policy');
Route::get('/privacy_policy', [PrivacyPolicyController::class, 'privacy_policy'])->name('privacy_policy');
Route::get('/terms_of_service', [TermsOfServiceController::class, 'terms_of_service'])->name('terms_of_service');
Route::get('/product_details', [ProductDetailsController::class, 'product_details'])->name('product_details');





















Route::get('/welcome', function () {
    return view('welcome');
});