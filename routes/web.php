<?php

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

Route::get('/', function () {
    return view('front.pages.home.index');
});

Route::get('/advanced-search', function () {
    return view('front.pages.search.advance');
})->name('advanced-search');

Route::get('/cars', function () {
    return view('front.pages.cars.index');
})->name('cars');
Route::get('/cto', function () {
    return view('front.pages.cto.index');
})->name('cto');
Route::get('/renta-car', function () {
    return view('front.pages.renta-car.catalog');
})->name('renta-car');
Route::get('/auto-salon', function () {
    return view('front.pages.auto-salon.catalog');
})->name('auto-salon');
Route::get('/auto-store', function () {
    return view('front.pages.auto-store.catalog');
})->name('auto-store');
Route::get('/number', function () {
    return view('front.pages.number.catalog');
})->name('number');
Route::get('/partnership', function () {
    return view('front.pages.partnership.index');
})->name('partnership');
Route::get('/favorite', function () {
    return view('front.pages.profile.favorites');
})->name('favorite');
Route::get('/comparison', function () {
    return view('front.pages.profile.comparison');
})->name('comparison');

Route::get('/cto-detail', function () {
    return view('front.pages.cto.show');
})->name('cto.show');

Route::get('/cto-catalog', function () {
    return view('front.pages.cto.catalog');
})->name('cto.catalog');

Route::get('/renta-car-show', function () {
    return view('front.pages.renta-car.show');
})->name('renta-car.show');

Route::get('/auto-salon-show', function () {
    return view('front.pages.auto-salon.show');
})->name('auto-salon.show');

Route::get('/auto-store-show', function () {
    return view('front.pages.auto-store.show');
})->name('auto-store.show');

Route::get('/number-show', function () {
    return view('front.pages.number.show');
})->name('number.show');

Route::get('/cart', function () {
    return view('front.pages.cart.index');
})->name('cart');

Route::get('/salon-cart', function () {
    return view('front.pages.cart.index', [
        'salon' => true
    ]);
})->name('salon-cart');

//require __DIR__.'/auth.php';
