<?php

namespace App\Repositories\Eloquent\Common\Auto;

use App\Models\Common\Auto\Market;
use App\Repositories\Contracts\Common\Auto\MarketRepositoryInterface;
use App\Repositories\Eloquent\EloquentRepository;

class MarketRepository extends EloquentRepository implements MarketRepositoryInterface
{
    public function __construct(Market $model)
    {
        parent::__construct($model);
    }
}
