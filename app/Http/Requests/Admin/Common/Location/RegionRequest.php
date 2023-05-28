<?php

namespace App\Http\Requests\Admin\Common\Location;

use App\Services\Eloquent\Common\Location\RegionService;
use Illuminate\Foundation\Http\FormRequest;

class RegionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return RegionService::rules();
    }
}
