<?php

namespace App\Providers;

use App\Helpers\Classes\Currency;
use App\Repositories\Contracts\Common\Location\NumberRegionRepositoryInterface;
use App\Repositories\Contracts\Common\Location\RegionRepositoryInterface;
use App\Repositories\Contracts\User\Advertisement\AdvertisementNumberRepositoryInterface;
use App\Services\Front\Advertisement\AdvertisementNumberService;
use Illuminate\Support\ServiceProvider;

class SingletonServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(AdvertisementNumberService::class, function ($app) {
            return new AdvertisementNumberService(
                $app->make(Currency::class),
                $app->make(AdvertisementNumberRepositoryInterface::class),
                $app->make(RegionRepositoryInterface::class),
                $app->make(NumberRegionRepositoryInterface::class),
            );
        });
    }

    public function boot(): void
    {

    }
}
