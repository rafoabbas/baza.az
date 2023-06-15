<?php

namespace App\Providers;

use App\Repositories\Contracts\Common\Auto\BodyTypeRepositoryInterface;
use App\Repositories\Contracts\Common\Auto\ClassTypeRepositoryInterface;
use App\Repositories\Contracts\Common\Auto\ColorRepositoryInterface;
use App\Repositories\Contracts\Common\Auto\FuelTypeRepositoryInterface;
use App\Repositories\Contracts\Common\Auto\GearRepositoryInterface;
use App\Repositories\Contracts\Common\Auto\MarketRepositoryInterface;
use App\Repositories\Contracts\Common\Auto\ServiceGroupItemRepositoryInterface;
use App\Repositories\Contracts\Common\Auto\ServiceGroupRepositoryInterface;
use App\Repositories\Contracts\Common\Auto\SpecificationRepositoryInterface;
use App\Repositories\Contracts\Common\Auto\StoreTypeRepositoryInterface;
use App\Repositories\Contracts\Common\Auto\TransmissionRepositoryInterface;
use App\Repositories\Contracts\Common\Car\CarBrandRepositoryInterface;
use App\Repositories\Contracts\Common\Car\CarModelRepositoryInterface;
use App\Repositories\Contracts\Common\Location\NumberRegionRepositoryInterface;
use App\Repositories\Contracts\Common\Location\RegionRepositoryInterface;
use App\Repositories\Contracts\EloquentRepositoryInterface;
use App\Repositories\Contracts\User\Advertisement\AdvertisementNumberRepositoryInterface;
use App\Repositories\Contracts\User\Auto\ServiceRepositoryInterface;
use App\Repositories\Eloquent\Common\Auto\BodyTypeRepository;
use App\Repositories\Eloquent\Common\Auto\ClassTypeRepository;
use App\Repositories\Eloquent\Common\Auto\ColorRepository;
use App\Repositories\Eloquent\Common\Auto\FuelTypeRepository;
use App\Repositories\Eloquent\Common\Auto\GearRepository;
use App\Repositories\Eloquent\Common\Auto\MarketRepository;
use App\Repositories\Eloquent\Common\Auto\ServiceGroupItemRepository;
use App\Repositories\Eloquent\Common\Auto\ServiceGroupRepository;
use App\Repositories\Eloquent\Common\Auto\SpecificationRepository;
use App\Repositories\Eloquent\Common\Auto\StoreTypeRepository;
use App\Repositories\Eloquent\Common\Auto\TransmissionRepository;
use App\Repositories\Eloquent\Common\Car\CarBrandRepository;
use App\Repositories\Eloquent\Common\Car\CarModelRepository;
use App\Repositories\Eloquent\Common\Location\NumberRegionRepository;
use App\Repositories\Eloquent\Common\Location\RegionRepository;
use App\Repositories\Eloquent\EloquentRepository;
use App\Repositories\Eloquent\User\Advertisement\AdvertisementNumberRepository;
use App\Repositories\Eloquent\User\Auto\ServiceRepository;
use Illuminate\Support\ServiceProvider;

final class RepositoryServiceProvider extends ServiceProvider
{
    public array $bindings = [
        ServiceRepositoryInterface::class => ServiceRepository::class,
        BodyTypeRepositoryInterface::class => BodyTypeRepository::class,
        ClassTypeRepositoryInterface::class => ClassTypeRepository::class,
        ColorRepositoryInterface::class => ColorRepository::class,
        FuelTypeRepositoryInterface::class => FuelTypeRepository::class,
        GearRepositoryInterface::class => GearRepository::class,
        MarketRepositoryInterface::class => MarketRepository::class,
        ServiceGroupItemRepositoryInterface::class => ServiceGroupItemRepository::class,
        ServiceGroupRepositoryInterface::class => ServiceGroupRepository::class,
        SpecificationRepositoryInterface::class => SpecificationRepository::class,
        StoreTypeRepositoryInterface::class => StoreTypeRepository::class,
        TransmissionRepositoryInterface::class => TransmissionRepository::class,
        CarBrandRepositoryInterface::class => CarBrandRepository::class,
        CarModelRepositoryInterface::class => CarModelRepository::class,
        NumberRegionRepositoryInterface::class => NumberRegionRepository::class,
        RegionRepositoryInterface::class => RegionRepository::class,
        AdvertisementNumberRepositoryInterface::class => AdvertisementNumberRepository::class,
        EloquentRepositoryInterface::class => EloquentRepository::class,
    ];
}
