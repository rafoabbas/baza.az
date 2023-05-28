<?php

namespace App\Repositories\Eloquent\Common\Location;

use App\Models\Common\Location\Region;
use App\Repositories\Contracts\Common\Location\RegionRepositoryInterface;
use App\Repositories\Eloquent\EloquentRepository;

class RegionRepository extends EloquentRepository implements RegionRepositoryInterface
{
    public function __construct(Region $model)
    {
        parent::__construct($model);
    }
}
