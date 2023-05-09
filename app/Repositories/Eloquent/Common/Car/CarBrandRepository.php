<?php

namespace App\Repositories\Eloquent\Common\Car;

use App\Models\Common\Car\CarBrand;
use App\Repositories\Contracts\Common\Car\CarBrandRepositoryInterface;
use App\Repositories\Eloquent\EloquentRepository;

class CarBrandRepository extends EloquentRepository implements CarBrandRepositoryInterface
{
    public function __construct(CarBrand $model)
    {
        parent::__construct($model);
    }
}
