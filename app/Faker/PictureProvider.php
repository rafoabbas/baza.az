<?php

namespace App\Faker;

use App\Models\Common\Upload;
use Faker\Provider\Base;
use Illuminate\Support\Facades\Storage;
use Str;

class PictureProvider extends Base
{
    public function picture(string $srcFolder, int $width = 300, int $height = 300): string
    {
        // Create a blank image:
        $image = imagecreatetruecolor($width, $height);

        // Add light background color:
        $bgColor = imagecolorallocate($image, rand(100, 255), rand(100, 255), rand(100, 255));

        imagefill($image, 0, 0, $bgColor);

        if (Storage::directoryMissing($srcFolder)) {
            Storage::makeDirectory($srcFolder);
        }

        $path = $srcFolder . DIRECTORY_SEPARATOR . Str::uuid()->toString() . '.jpg';

        // Save the image:
        $saveImage = imagejpeg($image, Storage::path($path));

        // Free up memory:
        imagedestroy($image);

        if ($saveImage) {
            return $path;
        }

        return new \Exception("image can't generated at " . self::class);
    }

    public function pictureSaveDatabase(string $srcFolder, int $width = 300, int $height = 300): string
    {
        $path = $this->picture($srcFolder, $width, $height);

        Upload::query()->create([
            'name'      => Str::uuid()->toString() . '.jpg',
            'path'      => $path,
            'mime_type' => 'image/jpeg',
            'extension' => 'jpg',
            'size'      => 123,
            'disk'      => config('filesystems.default'),
        ]);

        return $path;
    }
}
