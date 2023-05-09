<?php

namespace App\Models\Common;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Upload extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'path',
        'size',
        'mime_type',
        'extension',
        'disk',
    ];

    public function uploadable(): MorphTo
    {
        return $this->morphTo();
    }

    protected function url(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => config('app.url')
                .DIRECTORY_SEPARATOR.'storage'
                .DIRECTORY_SEPARATOR.$this->path
        );
    }
}
