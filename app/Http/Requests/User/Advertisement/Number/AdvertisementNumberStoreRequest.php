<?php

namespace App\Http\Requests\User\Advertisement\Number;

use App\Services\Front\Advertisement\AdvertisementNumberService;
use Illuminate\Foundation\Http\FormRequest;

class AdvertisementNumberStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return AdvertisementNumberService::storeRoles();
    }

    public function prepareForValidation()
    {
        return $this->merge([
            'is_mirror_numbers' => $this->request->has('is_mirror_numbers'),
            'is_three_numbers_in_a_row' => $this->request->has('is_three_numbers_in_a_row'),
            'is_five_numbers_in_a_row' => $this->request->has('is_five_numbers_in_a_row'),
            'is_two_zeros_and_a_number' => $this->request->has('is_two_zeros_and_a_number')
        ]);
    }
}
