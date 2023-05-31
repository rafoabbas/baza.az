<?php

namespace App\Services\Front\Advertisement;

use App\Http\Requests\User\Advertisement\Otp\AdvertisementOtpRequest;
use App\Models\User\Advertisement\AdvertisementOtp;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AdvertisementOtpService
{
    public function checkOtpSession(AdvertisementOtp $otp): void
    {
        abort_unless(session('otp_session') === $otp->getAttribute('uuid'), 403);
    }

    public function store(AdvertisementOtpRequest $request): AdvertisementOtp
    {
        $data = $request->validated();

        return $this->query()->create($data);
    }

    public function redirect(AdvertisementOtp $otp): RedirectResponse
    {
        session([
            'otp_session' => $otp->getAttribute('uuid')
        ]);

        if (Auth::check()) {
            return $this->redirectCreatePage($otp);
        }

        return redirect()->route('advertisement.otp', $otp);
    }

    public function redirectCreatePage(AdvertisementOtp $otp): RedirectResponse
    {
        return match ($otp->getAttribute('advertisement_type')) {
            'number' => redirect()->route('advertisement.number.create', $otp),
            default => redirect()->route('advertisement.create.auto', $otp),
        };
    }

    public static function generateOtpCode(): int
    {
        return rand(1000, 9999);
    }
    public function query(): Builder
    {
        return AdvertisementOtp::query();
    }

    public static function rules(): array
    {
        return [
            'uuid' => 'required|uuid|unique:advertisement_otps,uuid',
            'user_id' => 'sometimes|nullable|integer',
            'phone' => 'required|string|phone:AZ',
            'otp_code' => 'required|integer|digits:4',
            'advertisement_type' => 'required|string',
        ];
    }

    public static function prepareForValidation(): array
    {
        return [
            'user_id' => Auth::id(),
            'otp_code' => self::generateOtpCode()
        ];
    }
}
