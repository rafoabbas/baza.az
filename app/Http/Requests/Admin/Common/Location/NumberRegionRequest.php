<?php

namespace App\Http\Requests\Admin\Common\Location;

use App\Services\Eloquent\Common\Location\NumberRegionService;
use Illuminate\Foundation\Http\FormRequest;

class NumberRegionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return NumberRegionService::rules();
    }
}
