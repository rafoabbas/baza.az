<?php

namespace App\Repositories\Eloquent\Common\Auto;

use App\Models\Common\Auto\Transmission;
use App\Repositories\Contracts\Common\Auto\TransmissionRepositoryInterface;
use App\Repositories\Eloquent\EloquentRepository;

class TransmissionRepository extends EloquentRepository implements TransmissionRepositoryInterface
{
    public function __construct(Transmission $model)
    {
        parent::__construct($model);
    }
}
