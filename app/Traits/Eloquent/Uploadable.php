<?php

namespace App\Traits\Eloquent;

use App\Models\Common\Upload;
use Illuminate\Database\Eloquent\Relations\MorphOne;

trait Uploadable
{
    public function updateUploadWherePath(string $path): bool
    {
        return Upload::query()->where('path', $path)->update([
            'uploadable_id' => $this->getAttribute('id'),
            'uploadable_type' => get_class($this),
        ]);
    }

    public function upload(): MorphOne
    {
        return $this->morphOne(Upload::class, 'uploadable');
    }
}
