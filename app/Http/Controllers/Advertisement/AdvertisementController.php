<?php

namespace App\Http\Controllers\Advertisement;

use App\Enums\Advertisement\OtpStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\AdvertisementOtpCheckRequest;
use App\Http\Requests\User\AdvertisementOtpRequest;
use App\Models\User\AdvertisementOtp;
use App\Services\Front\Advertisement\AdvertisementOtpService;
use App\Services\Front\Advertisement\AdvertisementService;
use Illuminate\Http\Request;

class AdvertisementController extends Controller
{
    public function __construct(
        public AdvertisementService $service,
        public AdvertisementOtpService $otpService
    ) {
    }

    public function create(Request $request)
    {
        return view('front.pages.profile.advertisement.select');
    }

    public function store(AdvertisementOtpRequest $request)
    {
        return $this->otpService->redirect(
            $this->otpService->store($request)
        );
    }

    public function otp(AdvertisementOtp $otp)
    {
        $this->otpService->checkOtpSession($otp);


        if ($otp->getAttribute('status') === OtpStatus::verify()) {
            return $this->otpService->redirectCreatePage($otp);
        }

        return view('front.pages.profile.advertisement.otp', compact('otp'));
    }

    public function checkOtp(AdvertisementOtpCheckRequest $request, AdvertisementOtp $otp)
    {
        $this->otpService->checkOtpSession($otp);

        $otp->update(['status' => OtpStatus::verify()]);

        return $this->otpService->redirectCreatePage($otp);
    }

    public function createAuto(AdvertisementOtp $otp)
    {
        dd($otp);
    }

    public function createNumber(AdvertisementOtp $otp)
    {
        $this->otpService->checkOtpSession($otp);

        return view('front.pages.profile.advertisement.number', compact('otp'));
    }
}
