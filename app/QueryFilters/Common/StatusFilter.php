<?php

namespace App\QueryFilters\Common;

use Illuminate\Database\Eloquent\Builder;

class StatusFilter
{
    public function handle($request, $next): Builder
    {
        /**
         * @var Builder $builder
         */
        $builder = $next($request);

        if (request()->filled('status')) {
            $builder->where('status', '=', request('status'));
        }

        return $builder;
    }
}
