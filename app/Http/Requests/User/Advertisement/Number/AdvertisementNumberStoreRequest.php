<?php

namespace App\Http\Requests\User\Advertisement\Number;

use Illuminate\Foundation\Http\FormRequest;

class AdvertisementNumberStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [

        ];
    }
}
