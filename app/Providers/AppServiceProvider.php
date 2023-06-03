<?php

namespace App\Providers;

use App\Helpers\Classes\Currency;
use App\Models\User\Advertisement\AdvertisementNumber;
use App\Repositories\Contracts\Common\Location\NumberRegionRepositoryInterface;
use App\Repositories\Contracts\Common\Location\RegionRepositoryInterface;
use App\Repositories\Contracts\User\Advertisement\AdvertisementNumberRepositoryInterface;
use App\Services\Front\Advertisement\AdvertisementNumberService;
use Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider;
use Illuminate\Support\ServiceProvider;
use Laravel\Telescope\TelescopeServiceProvider as BaseTelescopeServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->localEnvironmentRegister();
    }

    public function boot(): void
    {
    }

    public function localEnvironmentRegister(): void
    {
        if ($this->app->isLocal()) {
            $this->app->register(BaseTelescopeServiceProvider::class);
            $this->app->register(TelescopeServiceProvider::class);
            $this->app->register(IdeHelperServiceProvider::class);
        }
    }
}
