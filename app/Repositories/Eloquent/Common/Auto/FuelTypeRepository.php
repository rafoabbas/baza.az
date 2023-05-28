<?php

namespace App\Repositories\Eloquent\Common\Auto;

use App\Models\Common\Auto\FuelType;
use App\Repositories\Contracts\Common\Auto\FuelTypeRepositoryInterface;
use App\Repositories\Eloquent\EloquentRepository;

class FuelTypeRepository extends EloquentRepository implements FuelTypeRepositoryInterface
{
    public function __construct(FuelType $model)
    {
        parent::__construct($model);
    }
}
