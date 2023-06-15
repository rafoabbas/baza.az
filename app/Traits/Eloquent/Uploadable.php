<?php

namespace App\Traits\Eloquent;

use App\Models\Common\Upload;
use App\Traits\Common\DeleteStorage;
use Illuminate\Database\Eloquent\Relations\MorphOne;

trait Uploadable
{
    use DeleteStorage;

    public function updateUploadWherePath(string $path, ?string $old_path = null): bool
    {
        if ($old_path !== $path) {
            $this->deleteUpload($old_path);
        }

        return Upload::query()->where('path', $path)->update([
            'uploadable_id' => $this->getAttribute('id'),
            'uploadable_type' => get_class($this)
        ]);
    }

    public function upload(): MorphOne
    {
        return $this->morphOne(Upload::class, 'uploadable');
    }

    public function deleteUpload(?string $path = null): void
    {
        if (is_null($path)) {
            return;
        }

        $this->deleteFromStorage($path);

        Upload::query()->where('path', $path)->delete();
    }
}
