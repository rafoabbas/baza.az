<?php

namespace App\Http\Requests\Admin\Common\Car;

use App\Services\Eloquent\Common\Car\CarBrandService;
use Illuminate\Foundation\Http\FormRequest;

class CarBrandRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return CarBrandService::rules();
    }
}
