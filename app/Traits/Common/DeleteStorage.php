<?php

namespace App\Traits\Common;

use Illuminate\Support\Facades\Storage;

trait DeleteStorage
{
    public function deleteFromStorage(string $path): void
    {
        if ($path) {
            if (Storage::exists($path)) {
                Storage::delete($path);
            }
        }
    }
}
