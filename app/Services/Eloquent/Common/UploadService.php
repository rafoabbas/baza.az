<?php

namespace App\Services\Eloquent\Common;

use App\Models\Common\Upload;
use App\Traits\Request\MimeTypes;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class UploadService
{
    use MimeTypes;

    public function getImages($images): Collection|array
    {
        return Upload::query()->whereIn('id', $images)->get();
    }

    public function image(UploadedFile $file): Upload
    {
        $folder = $this->makeFolder();

        $path = $file->storeAs($folder, $file->uuidName(), [
            'disk' => config('filesystems.default'),
        ]);

        return Upload::query()->create($this->makeInsertData($file, $path));
    }

    public function makeInsertData(UploadedFile $file, $path): array
    {
        return [
            'name' => $file->getClientOriginalName(),
            'path' => $path,
            'mime_type' => $file->getClientMimeType(),
            'extension' => $file->getClientOriginalExtension(),
            'size' => $file->getSize(),
            'disk' => config('filesystems.default'),
        ];
    }

    public function makeFolder(string $path = null, string $disk = 'public'): string
    {
        $path = $path ?? 'uploads' . DIRECTORY_SEPARATOR . date('y/m');

        if (Storage::disk($disk)->directoryMissing($path)) {
            Storage::disk($disk)->makeDirectory($path);
        }

        return $path;
    }

    public static function rules(array $rules = []): array
    {
        return array_merge([
            'file' => 'required|max:10240|mimetypes:' . self::imageMimes(),
        ], $rules);
    }
}
