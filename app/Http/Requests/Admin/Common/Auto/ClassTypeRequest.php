<?php

namespace App\Http\Requests\Admin\Common\Auto;

use App\Services\Eloquent\Common\Auto\ClassTypeService;
use Illuminate\Foundation\Http\FormRequest;

class ClassTypeRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return ClassTypeService::rules();
    }
}
