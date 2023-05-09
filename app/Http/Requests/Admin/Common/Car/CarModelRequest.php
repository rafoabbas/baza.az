<?php

namespace App\Http\Requests\Admin\Common\Car;

use App\Services\Eloquent\Common\Car\CarBrandService;
use App\Services\Eloquent\Common\Car\CarModelService;
use Illuminate\Foundation\Http\FormRequest;

class CarModelRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return CarModelService::rules();
    }

    protected function prepareForValidation(): void
    {
        $this->merge(CarModelService::prepareForValidation());
    }
}
