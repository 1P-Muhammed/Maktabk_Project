<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\ProductDetailsController;
use App\Http\Controllers\RefundPolicyController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TermsOfServiceController;
use Illuminate\Support\Facades\Route;


Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/login', [RegisterController::class, 'login'])->name('login');
Route::post('/logout', [RegisterController::class, 'logout'])->name('logout');


Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/home', [IndexController::class, 'index'])->name('home');
Route::get('/catalog', [CatalogController::class, 'catalog'])->name('catalog');
Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('cart.add');
Route::post('/cart/update', [CartController::class, 'updateCart'])->name('cart.update');
Route::get('/cart', [CartController::class, 'cart'])->name('cart');
Route::delete('/cart/remove', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::post('/checkout/send-email', [CheckoutController::class, 'sendEmail'])->name('send.checkout.email');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
Route::get('/search', [SearchController::class, 'search'])->name('search');
Route::get('/refund_policy', [RefundPolicyController::class, 'refund_policy'])->name('refund_policy');
Route::get('/privacy_policy', [PrivacyPolicyController::class, 'privacy_policy'])->name('privacy_policy');
Route::get('/terms_of_service', [TermsOfServiceController::class, 'terms_of_service'])->name('terms_of_service');
Route::get('/product_details/{id}', [ProductDetailsController::class, 'show'])->name('product_details');