<?php

namespace App\Traits\Eloquent\Attributes;

use App\Helpers\Classes\Helper;
use Illuminate\Database\Eloquent\Casts\Attribute as AttributeCast;

trait NameAttribute
{
    public function name(): AttributeCast
    {
        return AttributeCast::make(
            get: fn () => $this->{Helper::column('name')}
        );
    }
}
