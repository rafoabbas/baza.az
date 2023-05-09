<?php

namespace App\Repositories\Eloquent\Common\Car;

use App\Models\Common\Car\CarModel;
use App\Repositories\Contracts\Common\Car\CarBrandRepositoryInterface;
use App\Repositories\Eloquent\EloquentRepository;

class CarModelRepository extends EloquentRepository implements CarBrandRepositoryInterface
{
    public function __construct(CarModel $model)
    {
        parent::__construct($model);
    }
}
