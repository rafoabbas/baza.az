<?php

namespace App\Repositories\Eloquent\Common\Car;

use App\Models\Common\Car\CarModel;
use App\Repositories\Contracts\Common\Car\CarBrandRepositoryInterface;
use App\Repositories\Contracts\Common\Car\CarModelRepositoryInterface;
use App\Repositories\Eloquent\EloquentRepository;

class CarModelRepository extends EloquentRepository implements CarModelRepositoryInterface
{
    public function __construct(CarModel $model)
    {
        parent::__construct($model);
    }
}
