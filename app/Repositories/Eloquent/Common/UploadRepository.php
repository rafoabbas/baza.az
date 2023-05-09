<?php

namespace App\Repositories\Eloquent\Common;

use App\Models\Common\Upload;
use App\Repositories\Contracts\Common\UploadRepositoryInterface;
use App\Repositories\Eloquent\EloquentRepository;

class UploadRepository extends EloquentRepository implements UploadRepositoryInterface
{
    /**
     * @var Upload
     */
    public \Illuminate\Database\Eloquent\Model $model;

    public function __construct(Upload $model)
    {
        parent::__construct($model);
    }
}
