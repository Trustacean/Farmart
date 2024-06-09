<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
Route::get('/search', function () {
    return view('search');
});

Route::post('/login', [UserController::class, 'login'])->name('login');

Route::post('/register', [UserController::class, 'store'])->name('register');

Route::get('/home', function () {
    return view('home');
});

Route::post('/home', function () {
    return view('home');
})->name('home');

Route::get('/seller/register', function () {
    return view('seller/register');
});