<?php

namespace App\Services\Eloquent\Common\Location;

use App\Enums\Common\Status;
use App\Helpers\Classes\RuleHelper;
use App\Repositories\Contracts\Common\Location\RegionRepositoryInterface;
use App\Services\Eloquent\Contracts\CrudService;
use App\Traits\Request\ValidationRole;

class RegionService extends CrudService
{
    use ValidationRole;

    public function __construct(RegionRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }

    public static function postRules(): array
    {
        return RuleHelper::make([
            '%name%' => 'required|string|max:64|unique:regions,%name%',
            'status' => 'required|in:' . Status::toString(),
            'order' => 'required|integer|min:0',
        ]);
    }

    public static function putRules(): array
    {
        return array_merge(self::postRules(), RuleHelper::make([
            '%name%' => 'required|string|max:64|unique:regions,%name%,'
                . request()->route('region')->getAttribute('id'),
        ]));
    }
}
