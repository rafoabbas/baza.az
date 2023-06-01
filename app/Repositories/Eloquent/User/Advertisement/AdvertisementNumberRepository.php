<?php

namespace App\Repositories\Eloquent\User\Advertisement;

use App\Models\User\Advertisement\AdvertisementNumber;
use App\Repositories\Contracts\User\Advertisement\AdvertisementNumberRepositoryInterface;
use App\Repositories\Eloquent\EloquentRepository;

class AdvertisementNumberRepository extends EloquentRepository implements AdvertisementNumberRepositoryInterface
{
    public function __construct(AdvertisementNumber $model)
    {
        parent::__construct($model);
    }
}
