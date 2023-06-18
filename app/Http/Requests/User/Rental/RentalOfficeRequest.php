<?php

namespace App\Http\Requests\User\Rental;

use App\Models\User\Rental\RentalOffice;
use App\Services\Front\User\Rental\RentalOfficeService;
use Illuminate\Foundation\Http\FormRequest;

class RentalOfficeRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return RentalOfficeService::rules();
    }
}
