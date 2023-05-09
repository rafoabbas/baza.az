<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
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
                ->middleware('auth')
                ->withoutMiddleware('guest')
                ->name('logout');
        });

    Route::group([
        'middleware' => ['auth:admin'],
    ], function () {
        Route::get('', DashboardController::class)->name('dashboard');

        Route::resource('car-brand', CarBrandController::class);
        Route::resource('car-brand.model', CarModelController::class);
    });
});
