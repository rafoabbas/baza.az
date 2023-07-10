<?php

namespace App\Repositories\Eloquent;

use App\Models\Guard\User;
use App\Models\User\Rental\RentalOffice;
use App\Repositories\Contracts\User\Rental\RentalOfficeRepositoryInterface;
use App\Repositories\Contracts\User\UserRepositoryInterface;
use App\Repositories\Eloquent\EloquentRepository;

class UserRepository extends EloquentRepository implements UserRepositoryInterface
{
    public function __construct(User $model)
    {
        parent::__construct($model);
    }
}
