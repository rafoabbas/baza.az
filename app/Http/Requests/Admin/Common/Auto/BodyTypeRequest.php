<?php

namespace App\Http\Requests\Admin\Common\Auto;

use App\Services\Eloquent\Common\Auto\BodyTypeService;
use Illuminate\Foundation\Http\FormRequest;

class BodyTypeRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return BodyTypeService::rules();
    }
}
