<?php

namespace App\Http\Resources\Common;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UploadResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->getAttribute('id'),
            'name' => $this->getAttribute('name'),
            'path' => $this->getAttribute('path'),
            'url' => $this->getAttribute('url'),
            'size' => $this->getAttribute('size'),
            'mime_type' => $this->getAttribute('mime_type'),
            'extension' => $this->getAttribute('extension'),
            'created_at' => $this->getAttribute('created_at'),
            'updated_at' => $this->getAttribute('updated_at')
        ];
    }
}
