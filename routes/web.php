<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

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

Route::controller(FrontController::class)->group(function () {
    Route::get('/', 'index')->name('front.index');
    Route::get('/menu', 'menu')->name('front.menu');
    Route::get('/cart', 'cart')->name('front.cart');
});

