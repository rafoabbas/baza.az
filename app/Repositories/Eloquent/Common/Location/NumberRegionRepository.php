<?php

namespace App\Repositories\Eloquent\Common\Location;

use App\Models\Common\Location\NumberRegion;
use App\Repositories\Contracts\Common\Location\NumberRegionRepositoryInterface;
use App\Repositories\Eloquent\EloquentRepository;

class NumberRegionRepository extends EloquentRepository implements NumberRegionRepositoryInterface
{
    public function __construct(NumberRegion $model)
    {
        parent::__construct($model);
    }
}
