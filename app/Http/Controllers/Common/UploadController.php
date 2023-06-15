<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use App\Http\Requests\Common\Upload\ImagesRequest;
use App\Http\Requests\Common\Upload\ImageUploadRequest;
use App\Http\Resources\Common\UploadResource;
use App\Services\Eloquent\Common\UploadService;

class UploadController extends Controller
{
    public function __construct(public UploadService $service)
    {
    }

    public function image(ImageUploadRequest $request)
    {
        return UploadResource::make($this->service->image($request->file('file')));
    }

    public function getImage(ImagesRequest $request)
    {
        return UploadResource::collection($this->service->getImages($request->input('images')));
    }
}
