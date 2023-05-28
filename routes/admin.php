<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\Common\Auto\BodyTypeController;
use App\Http\Controllers\Admin\Common\Auto\ColorController;
use App\Http\Controllers\Admin\Common\Auto\FuelTypeController;
use App\Http\Controllers\Admin\Common\Auto\GearController;
use App\Http\Controllers\Admin\Common\Auto\MarketController;
use App\Http\Controllers\Admin\Common\Auto\TransmissionController;
use App\Http\Controllers\Admin\Common\Car\CarBrandController;
use App\Http\Controllers\Admin\Common\Car\CarModelController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::group([
    'as' => 'admin.',
], function () {
    Route::get('test', TestController::class)->name('test');

    Route::controller(AuthenticatedSessionController::class)
        ->middleware('guest')
        ->group(function () {
            Route::get('login', 'login')->name('login');

            Route::post('login', 'store');

            Route::post('logout', 'destroy')
                ->middleware('auth:admin')
                ->withoutMiddleware('guest')
                ->name('logout');
        });

    Route::group([
        'middleware' => ['auth:admin'],
    ], function () {
        Route::get('', DashboardController::class)->name('dashboard');

        Route::resource('gear', GearController::class);
        Route::resource('market', MarketController::class);
        Route::resource('transmission', TransmissionController::class);
        Route::resource('color', ColorController::class);
        Route::resource('fuel-type', FuelTypeController::class);
        Route::resource('body-type', BodyTypeController::class);
        Route::resource('car-brand', CarBrandController::class);
        Route::resource('car-brand.model', CarModelController::class);
    });
});
