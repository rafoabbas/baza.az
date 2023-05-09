<?php

namespace App\Providers;

use App\Repositories\Contracts\Common\Car\CarBrandRepositoryInterface;
use App\Repositories\Contracts\Common\Car\CarModelRepositoryInterface;
use App\Repositories\Contracts\EloquentRepositoryInterface;
use App\Repositories\Eloquent\Common\Car\CarBrandRepository;
use App\Repositories\Eloquent\Common\Car\CarModelRepository;
use App\Repositories\Eloquent\EloquentRepository;
use Illuminate\Support\ServiceProvider;

final class RepositoryServiceProvider extends ServiceProvider
{
    public array $bindings = [
        CarModelRepositoryInterface::class => CarModelRepository::class,
        CarBrandRepositoryInterface::class => CarBrandRepository::class,
        EloquentRepositoryInterface::class => EloquentRepository::class,
    ];
}
