<?php

namespace App\Http\Requests\Admin\Common\Auto;

use App\Services\Eloquent\Common\Auto\MarketService;
use Illuminate\Foundation\Http\FormRequest;

class MarketRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return MarketService::rules();
    }
}
