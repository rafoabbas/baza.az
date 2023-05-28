<?php

namespace App\Providers;

use App\Repositories\Contracts\Common\Auto\BodyTypeRepositoryInterface;
use App\Repositories\Contracts\Common\Auto\ColorRepositoryInterface;
use App\Repositories\Contracts\Common\Auto\FuelTypeRepositoryInterface;
use App\Repositories\Contracts\Common\Auto\GearRepositoryInterface;
use App\Repositories\Contracts\Common\Auto\MarketRepositoryInterface;
use App\Repositories\Contracts\Common\Auto\TransmissionRepositoryInterface;
use App\Repositories\Contracts\Common\Car\CarBrandRepositoryInterface;
use App\Repositories\Contracts\Common\Car\CarModelRepositoryInterface;
use App\Repositories\Contracts\EloquentRepositoryInterface;
use App\Repositories\Eloquent\Common\Auto\BodyTypeRepository;
use App\Repositories\Eloquent\Common\Auto\ColorRepository;
use App\Repositories\Eloquent\Common\Auto\FuelTypeRepository;
use App\Repositories\Eloquent\Common\Auto\GearRepository;
use App\Repositories\Eloquent\Common\Auto\MarketRepository;
use App\Repositories\Eloquent\Common\Auto\TransmissionRepository;
use App\Repositories\Eloquent\Common\Car\CarBrandRepository;
use App\Repositories\Eloquent\Common\Car\CarModelRepository;
use App\Repositories\Eloquent\EloquentRepository;
use Illuminate\Support\ServiceProvider;

final class RepositoryServiceProvider extends ServiceProvider
{
    public array $bindings = [
        GearRepositoryInterface::class => GearRepository::class,
        ColorRepositoryInterface::class => ColorRepository::class,
        MarketRepositoryInterface::class => MarketRepository::class,
        FuelTypeRepositoryInterface::class => FuelTypeRepository::class,
        BodyTypeRepositoryInterface::class => BodyTypeRepository::class,
        CarModelRepositoryInterface::class => CarModelRepository::class,
        CarBrandRepositoryInterface::class => CarBrandRepository::class,
        EloquentRepositoryInterface::class => EloquentRepository::class,
        TransmissionRepositoryInterface::class => TransmissionRepository::class,
    ];
}
