<?php

namespace App\Http\Requests\User\Rental;

use App\Services\Front\User\Rental\RentalItemService;
use Illuminate\Foundation\Http\FormRequest;

class RentalItemRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return RentalItemService::rules();
    }
}
