<?php

namespace App\Http\Requests\Admin\Common\Auto;

use App\Services\Eloquent\Common\Auto\SpecificationService;
use Illuminate\Foundation\Http\FormRequest;

class SpecificationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return SpecificationService::rules();
    }
}
