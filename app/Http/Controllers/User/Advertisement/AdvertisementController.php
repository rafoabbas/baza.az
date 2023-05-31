<?php

namespace App\Http\Controllers\User\Advertisement;

use App\Enums\Advertisement\OtpStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\Advertisement\Otp\AdvertisementOtpCheckRequest;
use App\Http\Requests\User\Advertisement\Otp\AdvertisementOtpRequest;
use App\Models\User\Advertisement\AdvertisementOtp;
use App\Services\Front\Advertisement\AdvertisementNumberService;
use App\Services\Front\Advertisement\AdvertisementOtpService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdvertisementController extends Controller
{
    public function __construct(
        public AdvertisementOtpService $otpService,
        public AdvertisementNumberService $numberService
    ) {
    }

    public function create(Request $request): View
    {
        return view('front.pages.profile.advertisement.select');
    }

    public function store(AdvertisementOtpRequest $request): RedirectResponse
    {
        return $this->otpService->redirect(
            $this->otpService->store($request)
        );
    }

    public function otp(AdvertisementOtp $otp): View|RedirectResponse
    {
        $this->otpService->checkOtpSession($otp);


        if ($otp->getAttribute('status') === OtpStatus::verify()) {
            return $this->otpService->redirectCreatePage($otp);
        }

        return view('front.pages.profile.advertisement.otp', compact('otp'));
    }

    public function checkOtp(AdvertisementOtpCheckRequest $request, AdvertisementOtp $otp): RedirectResponse
    {
        $this->otpService->checkOtpSession($otp);

        $otp->update(['status' => OtpStatus::verify()]);

        return $this->otpService->redirectCreatePage($otp);
    }

    public function createAuto(AdvertisementOtp $otp)
    {
        return view('front.pages.profile.advertisement.car', compact('otp'));
    }
}
