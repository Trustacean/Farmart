<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;

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

Route::get('/', function () {
    return view('onboard');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::post('/login', [UserController::class, 'login'])->name('login');

Route::post('/register', [UserController::class, 'store'])->name('register');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

Route::get('/checkout', [CartController::class, 'checkout']);

Route::get('/payment-qr', [CartController::class, 'paymentQr']);