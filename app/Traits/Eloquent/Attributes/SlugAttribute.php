<?php

namespace App\Traits\Eloquent\Attributes;

use App\Helpers\Classes\Helper;
use Illuminate\Database\Eloquent\Casts\Attribute as AttributeCast;

trait SlugAttribute
{
    public function slug(): AttributeCast
    {
        return AttributeCast::make(
            get: fn () => $this->{Helper::column('slug')}
        );
    }
}
