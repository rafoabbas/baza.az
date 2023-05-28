<?php

namespace App\QueryFilters\Common;

use App\Helpers\Classes\Helper;
use Illuminate\Database\Eloquent\Builder;

class NameLangFilter
{
    public function handle($request, $next): Builder
    {
        /**
         * @var Builder $builder
         */
        $builder = $next($request);

        if (request()->filled('name')) {
            $builder->where(
                Helper::column('name'),
                'like',
                '%' . request('name') . '%'
            );
        }

        return $builder;
    }
}
