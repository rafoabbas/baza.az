<?php

use App\Http\Controllers\Common\UploadController;
use App\Http\Controllers\User\Advertisement\AdvertisementAutoController;
use App\Http\Controllers\User\Advertisement\AdvertisementController;
use App\Http\Controllers\User\Advertisement\AdvertisementNumberController;
use App\Http\Controllers\User\Auth\Business\AuthenticatedSessionController;
use App\Http\Controllers\User\Auth\Business\NewPasswordController;
use App\Http\Controllers\User\Auth\Business\PasswordResetLinkController;
use App\Http\Controllers\User\Auth\Business\RegisteredUserController;
use App\Http\Controllers\User\Auth\Personal\PersonalAuthenticatedController;
use App\Http\Controllers\User\Auto\SalonController;
use App\Http\Controllers\User\Auto\ServiceController;
use App\Http\Controllers\User\Auto\StoreController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\Rental\RentalItemController;
use App\Http\Controllers\User\Rental\RentalOfficeController;
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



#upload files
Route::controller(UploadController::class)
    ->as('common.upload.')
    ->prefix('common/upload')
    ->group(function () {
        Route::post('image', 'image')->name('image');
        Route::post('images', 'getImage')->name('get.images');
    });

Route::group([
    'as' => 'advertisement.',
    'prefix' => 'advertisement',
], function () {
    Route::get('', [AdvertisementController::class, 'create'])->name('create');
    Route::post('store', [AdvertisementController::class, 'store'])->name('store');
    Route::get('{otp:uuid}/otp', [AdvertisementController::class, 'otp'])->name('otp');
    Route::post('{otp:uuid}/otp', [AdvertisementController::class, 'checkOtp'])->name('check.otp');
    Route::get('{otp:uuid}/auto', [AdvertisementController::class, 'createAuto'])->name('create.auto');
});

Route::group([
    'as' => 'auth.',
    'middleware' => 'guest'
], function () {
    Route::controller(PersonalAuthenticatedController::class)
        ->as('personal.')
        ->prefix('personal')
        ->group(function () {
            Route::get('login', 'login')->name('login');
            Route::post('login', 'phone');
            Route::get('code', 'code')->name('code');
            Route::post('code', 'check');
        });


    Route::group([
        'as' => 'business.',
        'prefix' => 'business'
    ], function () {
        Route::get('register', [RegisteredUserController::class, 'create'])
            ->name('register');

        Route::post('register', [RegisteredUserController::class, 'store']);

        Route::get('login', [AuthenticatedSessionController::class, 'create'])
            ->name('login');

        Route::post('login', [AuthenticatedSessionController::class, 'store']);

        Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
            ->name('password.request');

        Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
            ->name('password.email');

        Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
            ->name('password.reset');

        Route::post('reset-password', [NewPasswordController::class, 'store'])
            ->name('password.store');
    });
});


Route::group([
    'as' => 'profile.',
    'prefix' => 'profile',
    'middleware' => 'auth'
], function () {
    Route::get('', [ProfileController::class, 'index'])->name('index');
    Route::post('logout', [ProfileController::class, 'logout'])->name('logout');
    Route::any('update', [ProfileController::class, 'update'])->name('update');

    Route::singleton('service', ServiceController::class);
    Route::singleton('store', StoreController::class);
    Route::singleton('salon', SalonController::class);
    Route::singleton('rental', RentalOfficeController::class);

    Route::resource('rental-item', RentalItemController::class)
        ->only(['create', 'store']);

    Route::controller(SalonController::class)
        ->as('salon.')
        ->prefix('salon')
        ->group(function () {
            Route::get('autos', 'autos')->name('autos');
            Route::get('add-auto', 'addAutoView')->name('add-auto');
        });
//    Route::controller(RentalOfficeController::class)
//        ->as('rental.')
//        ->prefix('rental')
//        ->group(function () {
//            Route::get('autos', 'autos')->name('autos');
//            Route::get('add-auto', 'addAutoView')->name('add-auto');
//        });
});

Route::group([
    'as' => 'common.',
], static function () {
    Route::controller(\App\Http\Controllers\Common\Auto\SalonController::class)
        ->as('salon.')
        ->prefix('salon')
        ->group(function () {
            Route::get('', 'index')->name('index');
            Route::get('show/{salon}', 'show')->name('show');
        });
});


Route::resource('advertisement.number', AdvertisementNumberController::class)
    ->parameter('advertisement', 'otp:uuid')
    ->only(['create', 'store', 'edit', 'update', 'destroy']);

Route::resource('advertisement.auto', AdvertisementAutoController::class)
    ->parameter('advertisement', 'otp:uuid')
    ->only(['create', 'store', 'edit', 'update', 'destroy']);

//Route::controller(StoreController::class)
//    ->as('profile.business.store.')
//    ->prefix('profile/store')
//    ->group(function () {
//        Route::get('', 'index')->name('index');
//        Route::get('edit/{store}', 'edit')->name('edit');
//        Route::post('update/{store}', 'update')->name('update');
//        Route::delete('destroy/{store}', 'destroy')->name('destroy');
//    });
//
//Route::controller(SalonController::class)
//    ->as('profile.business.salon.')
//    ->prefix('profile/salon')
//    ->group(function () {
//        Route::get('', 'index')->name('index');
//        Route::get('edit/{salon}', 'edit')->name('edit');
//        Route::post('update/{salon}', 'update')->name('update');
//        Route::delete('destroy/{salon}', 'destroy')->name('destroy');
//        Route::get('autos', 'autos')->name('autos');
//        Route::get('add-auto', 'addAutoView')->name('add-auto');
//        Route::post('add-auto', 'addAuto')->name('add-auto');
//    });



Route::get('', function () {
    return view('front.pages.home.index');
})->name('index');
Route::get('personal-login', function () {
    return view('front.pages.auth.personal-login');
})->name('personal-login');
Route::get('business-login', function () {
    return view('front.pages.auth.business-login');
})->name('business-login');
Route::get('personal-register', function () {
    return view('front.pages.auth.personal-register');
})->name('personal-register');
Route::get('business-register', function () {
    return view('front.pages.auth.business-register');
})->name('business-register');
Route::get('change-password', function () {
    return view('front.pages.auth.change-password');
})->name('change-password');
Route::get('forgot-password', function () {
    return view('front.pages.auth.forgot-password');
})->name('forgot-password');
Route::get('reset-password', function () {
    return view('front.pages.auth.reset-password');
})->name('reset-password');
Route::get('otp', function () {
    return view('front.pages.auth.otp');
})->name('otp');

Route::get('/create-ads', function () {
    return view('front.pages.profile.advertisement.select');
})->name('add.ads');

Route::get('/create-car', function () {
    return view('front.pages.profile.advertisement.car');
})->name('add.car');


Route::get('/create-number', function () {
    return view('front.pages.profile.advertisement.number');
})->name('add.number');


Route::get('/profile-business', function () {
    return view('front.pages.profile.business.index');
})->name('profile.business');

Route::group(['prefix' => 'profile-business', 'as' => 'profile.business.'], function () {
    Route::get('/', function () {
        return view('front.pages.profile.business.index');
    })->name('index');

//    Route::group(['prefix' => 'autosalon', 'as' => 'autosalon.'], function () {
//        Route::get('/', function () {
//            return view('front.pages.profile.business.pages.autosalon.index');
//        })->name('index');
//        Route::get('/redakte', function () {
//            return view('front.pages.profile.business.pages.autosalon.edit');
//        })->name('edit');
//        Route::get('/autos', function () {
//            return view('front.pages.profile.business.pages.autosalon.autos');
//        })->name('autos');
//        Route::get('/add-auto', function () {
//            return view('front.pages.profile.business.pages.autosalon.add-auto');
//        })->name('add-auto');
//    });

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
    return view('front.pages.cto.catalog');
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
    return view('front.pages.cto.index');
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
