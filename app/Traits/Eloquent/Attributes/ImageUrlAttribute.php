<?php

namespace App\Traits\Eloquent\Attributes;

use App\Helpers\Classes\Helper;
use Illuminate\Database\Eloquent\Casts\Attribute as AttributeCast;

trait ImageUrlAttribute
{
    protected function imageUrl(): AttributeCast
    {
        return AttributeCast::make(
            get: fn($value) => asset('storage' . DIRECTORY_SEPARATOR . $this->getAttribute('image'))
        );
    }
}
