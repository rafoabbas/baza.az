<?php

namespace App\Services\Eloquent\Common\Auto;

use App\Enums\Common\Status;
use App\Helpers\RuleHelper;
use App\Repositories\Contracts\Common\Auto\BodyTypeRepositoryInterface;
use App\Repositories\Contracts\Common\Auto\ColorRepositoryInterface;
use App\Repositories\Contracts\Common\Auto\FuelTypeRepositoryInterface;
use App\Services\Eloquent\Contracts\CrudService;
use App\Traits\Request\ValidationRole;

class FuelTypeService extends CrudService
{
    use ValidationRole;

    public function __construct(FuelTypeRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }

    public static function postRules(): array
    {
        return RuleHelper::make([
            '%name%' => 'required|string|max:64|unique:fuel_types,%name%',
            'status' => 'required|in:' . Status::toString(),
            'order' => 'required|integer|min:0',
        ]);
    }

    public static function putRules(): array
    {
        return array_merge(self::postRules(), RuleHelper::make([
            '%name%' => 'required|string|max:64|unique:fuel_types,%name%,'
                . request()->route('fuel_type')->getAttribute('id'),
        ]));
    }
}
