<?php

namespace App\Services\Eloquent\Common\Location;

use App\Enums\Common\Status;
use App\Helpers\Classes\RuleHelper;
use App\Repositories\Contracts\Common\Location\NumberRegionRepositoryInterface;
use App\Repositories\Contracts\Common\Location\RegionRepositoryInterface;
use App\Services\Eloquent\Contracts\CrudService;
use App\Traits\Request\ValidationRole;

class NumberRegionService extends CrudService
{
    use ValidationRole;

    public function __construct(NumberRegionRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }

    public static function postRules(): array
    {
        return RuleHelper::make([
            '%name%' => 'required|string|max:64',
            'region_code' => 'required|string|max:2|unique:number_regions,region_code',
            'status' => 'required|in:' . Status::toString(),
            'order' => 'required|integer|min:0',
        ]);
    }

    public static function putRules(): array
    {
        return array_merge(self::postRules(), RuleHelper::make([
            'region_code' => 'required|string|max:2|unique:number_regions,region_code,'
                . request()->route('number-region')->getAttribute('id'),
        ]));
    }
}
