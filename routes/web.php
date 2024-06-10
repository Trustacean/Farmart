<?php

use App\Http\Controllers\AddressController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\ProductController;
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
Route::get('/', [UserController::class, 'showOnboardPage'])->name('onboard');

Route::get('/register', [UserController::class, 'showRegisterPage'])->name('register');

Route::get('/login', [UserController::class, 'showLoginPage'])->name('login');

Route::post('/login', [UserController::class, 'login'])->name('login');

Route::post('/register', [UserController::class, 'store'])->name('register');

Route::get('/home', [UserController::class, 'showHomePage'])->name('home');

Route::get('/category/{category}', [UserController::class, 'showCategorizedPage'])->name('category');

Route::get('/profile', [UserController::class, 'showProfilePage'])->name('profile');

Route::get('profile/address', [AddressController::class, 'index'])->name('profile/address');

Route::get('/get-cities/{provinceId}', [AddressController::class, 'getCities']);

Route::get('/get-districts/{cityId}', [AddressController::class, 'getDistricts']);

Route::get('/get-subdistricts/{districtId}', [AddressController::class, 'getSubDistricts']);

Route::get('/get-zip-codes/{cityId}/{districtId}', [AddressController::class, 'getZipCode']);

Route::post('/profile/address/update', [UserController::class, 'storeAddress'])->name('profile/address/update');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/seller/register', [SellerController::class, 'showSellerRegisterPage'])->name('seller/register');

Route::post('/seller/register', [SellerController::class, 'storeSeller'])->name('seller/register');

Route::get('/seller/store', [SellerController::class, 'showStorePage'])->name('seller/store');

Route::get('/product/detail/{productId}', [ProductController::class, 'showProductDetail'])->name('product/detail');

Route::get('/product/create', [ProductController::class, 'showProductCreate'])->name('product.create');

Route::post('/product/create', [ProductController::class, 'storeProduct'])->name('product.create');

Route::get('/product/edit/{productId}', [ProductController::class, 'showProductEdit'])->name('product/edit');

Route::post('/product/update/{productId}', [ProductController::class, 'updateProduct'])->name('product.update');

Route::get('cart', [CartController::class, 'index'])->name('cart');

Route::get('checkout', [CartController::class, 'checkout'])->name('checkout');

Route::get('payment-qr', [CartController::class, 'paymentQr'])->name('payment');