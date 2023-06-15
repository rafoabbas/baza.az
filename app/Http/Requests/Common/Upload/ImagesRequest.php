<?php

namespace App\Http\Requests\Common\Upload;

use App\Services\Eloquent\Common\UploadService;
use Illuminate\Foundation\Http\FormRequest;

class ImagesRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'images' => 'required|array'
        ];
    }
}
