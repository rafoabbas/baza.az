<?php

namespace App\Traits\Eloquent\Attributes;

use App\Helpers\Classes\Helper;
use Illuminate\Database\Eloquent\Casts\Attribute as AttributeCast;

trait DescriptionAttribute
{
    public function description(): AttributeCast
    {
        return AttributeCast::make(
            get: fn () => $this->{Helper::column('description')}
        );
    }
}
