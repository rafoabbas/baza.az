<?php

namespace App\Traits\Eloquent\Attributes;

use App\Helpers\Classes\Helper;
use Illuminate\Database\Eloquent\Casts\Attribute as AttributeCast;

trait ValueAttribute
{
    public function value(): AttributeCast
    {
        return AttributeCast::make(
            get: fn () => $this->{Helper::column('value')}
        );
    }
}
