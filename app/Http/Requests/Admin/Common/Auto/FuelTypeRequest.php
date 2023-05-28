<?php

namespace App\Http\Requests\Admin\Common\Auto;

use Illuminate\Foundation\Http\FormRequest;

class FuelTypeRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return FuelTypeRequest::rules();
    }
}
