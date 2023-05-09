<?php

namespace App\Traits\Request;

trait MimeTypes
{
    public static function imageMimes(): string
    {
        return implode(',', config('media.mime_types.image'));
    }

    public static function videoMimes(): string
    {
        return implode(',', config('media.mime_types.video'));
    }

    public static function documentMimes(): string
    {
        return implode(',', config('media.mime_types.document'));
    }
}
