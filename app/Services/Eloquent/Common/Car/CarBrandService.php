<?php

namespace App\Services\Eloquent\Common\Car;

use App\Enums\Common\Status;
use App\Helpers\Classes\RuleHelper;
use App\Repositories\Contracts\Common\Car\CarBrandRepositoryInterface;
use App\Services\Eloquent\Contracts\CrudService;
use App\Traits\Request\ValidationRole;

class CarBrandService extends CrudService
{
    use ValidationRole;

    public function __construct(CarBrandRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }

    public static function postRules(): array
    {
        return RuleHelper::make([
            '%name%' => 'required|string|max:64|unique:car_brands,%name%',
            'status' => 'required|in:' . Status::toString(),
            'order' => 'required|integer|min:0',
        ]);
    }

    public static function putRules(): array
    {
        return array_merge(self::postRules(), RuleHelper::make([
            '%name%' => 'required|string|max:64|unique:car_brands,%name%,'
                . request()->route('car_brand')->getAttribute('id'),
        ]));
    }
}
