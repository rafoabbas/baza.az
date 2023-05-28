<?php

use App\Http\Controllers\Advertisement\AdvertisementController;
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

Route::group([
    'name' => 'advertisement.',
    'prefix' => 'advertisement',
], function () {
    Route::get('create', [AdvertisementController::class, 'create'])->name('create');
});

Route::get('/', function () {
    return view('front.pages.home.index');
});

Route::get('/create-ads', function () {
    return view('front.pages.profile.add.select-ads');
})->name('add.ads');

Route::get('/create-car', function () {
    return view('front.pages.profile.add.car');
})->name('add.car');


Route::get('/create-number', function () {
    return view('front.pages.profile.add.number');
})->name('add.number');

Route::get('/profile', function () {
    return view('front.pages.profile.index');
})->name('profile');

Route::get('/profile-business', function () {
    return view('front.pages.profile.business.index');
})->name('profile.business');

Route::group(['prefix' => 'profile-business', 'as' => 'profile.business.'], function () {
    Route::get('/', function () {
        return view('front.pages.profile.business.index');
    })->name('index');

    Route::group(['prefix' => 'autosalon', 'as' => 'autosalon.'], function () {
        Route::get('/', function () {
            return view('front.pages.profile.business.pages.autosalon.index');
        })->name('index');
        Route::get('/redakte', function () {
            return view('front.pages.profile.business.pages.autosalon.edit');
        })->name('edit');
        Route::get('/autos', function () {
            return view('front.pages.profile.business.pages.autosalon.autos');
        })->name('autos');
        Route::get('/add-auto', function () {
            return view('front.pages.profile.business.pages.autosalon.add-auto');
        })->name('add-auto');
    });
    Route::group(['prefix' => 'autoservice', 'as' => 'autoservice.'], function () {
        Route::get('/', function () {
            return view('front.pages.profile.business.pages.autoservice.index');
        })->name('index');
        Route::get('/redakte', function () {
            return view('front.pages.profile.business.pages.autoservice.edit');
        })->name('edit');
    });
    Route::group(['prefix' => 'autostore', 'as' => 'autostore.'], function () {
        Route::get('/', function () {
            return view('front.pages.profile.business.pages.autostore.index');
        })->name('index');
        Route::get('/redakte', function () {
            return view('front.pages.profile.business.pages.autostore.edit');
        })->name('edit');
    });
    Route::group(['prefix' => 'rentacar', 'as' => 'rentacar.'], function () {
        Route::get('/', function () {
            return view('front.pages.profile.business.pages.rentacar.index');
        })->name('index');
        Route::get('/redakte', function () {
            return view('front.pages.profile.business.pages.rentacar.edit');
        })->name('edit');
        Route::get('/add-auto', function () {
            return view('front.pages.profile.business.pages.rentacar.add-auto');
        })->name('add-auto');
    });
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
