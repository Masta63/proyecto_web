<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/cafe', function () {
    return Redirect::to('/products?category=cafe');
})->name('cafe');

Route::get('/frutas', function () {
    return Redirect::to('/products?category=frutas');
})->name('frutas');

Route::get('/verduras', function () {
    return Redirect::to('/products?category=verduras');
})->name('verduras');

Route::get('/', function () {
    return view('home');
});

Route::middleware('auth')->group(function () {

    Route::get('/checkout', [App\Http\Controllers\CheckoutController::class, 'index'])->name('checkout.index');
    Route::post('/checkout/confirm', [App\Http\Controllers\CheckoutController::class, 'confirm'])->name('checkout.confirm');

    Route::middleware('is_operator_or_admin')->group(function () {
        Route::get('/panel', [App\Http\Controllers\AdminController::class, 'index'])->name('panel');
        Route::get('/panel/products', [App\Http\Controllers\AdminController::class, 'listProducts'])->name('panel.products');

        Route::resource('products', ProductController::class)->except('index');
        Route::get('/products/{product}', [App\Http\Controllers\ProductController::class, 'confirmDestroy'])->name('products.confirmDestroy');
    });

    Route::middleware('is_admin')->group(function () {
        Route::get('/panel/users', [App\Http\Controllers\AdminController::class, 'listUsers'])->name('panel.users');

        Route::resource('users', UserController::class);
        Route::get('/users/{user}', [App\Http\Controllers\UserController::class, 'confirmDestroy'])->name('users.confirmDestroy');
    });
});

Route::resource('products', ProductController::class)->only('index');

Route::resource('cart', CartController::class)->except(['create', 'show', 'edit']);
Route::get('/cart/empty', [App\Http\Controllers\CartController::class, 'emptyCart'])->name('cart.empty');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::post('/contact/send', [App\Http\Controllers\ContactController::class, 'send'])->name('contact.send');

Route::get('/information', [App\Http\Controllers\InformationController::class, 'index'])->name('information');
