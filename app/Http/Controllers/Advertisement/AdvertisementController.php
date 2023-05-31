<?php

namespace App\Http\Controllers\Advertisement;

use App\Enums\Advertisement\OtpStatus;
use App\Helpers\Classes\Breadcrumb;
use App\Helpers\Classes\Helper;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\AdvertisementOtpCheckRequest;
use App\Http\Requests\User\AdvertisementOtpRequest;
use App\Models\User\Advertisement\AdvertisementNumber;
use App\Models\User\Advertisement\AdvertisementOtp;
use App\Repositories\Contracts\Common\Location\NumberRegionRepositoryInterface;
use App\Services\Eloquent\Common\Location\NumberRegionService;
use App\Services\Front\Advertisement\AdvertisementNumberService;
use App\Services\Front\Advertisement\AdvertisementOtpService;
use App\Services\Front\Advertisement\AdvertisementService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdvertisementController extends Controller
{
    public function __construct(
        public AdvertisementOtpService $otpService,
        public AdvertisementNumberService $numberService,
        public NumberRegionRepositoryInterface $numberRegionRepository,
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

    public function createNumber(AdvertisementOtp $otp): View
    {
        $this->otpService->checkOtpSession($otp);

        $numberRegions = $this->numberRegionRepository->all(
            Helper::select(['id', 'name%', 'region_code'])
        );

        return view('front.pages.profile.advertisement.number', [
            'title' => trans('Satışa nömrə nişanı əlavə edin'),
            'otp' => $otp,
            'numberRegions' => $numberRegions,
            'pageTitleHtml' => $this->numberService->pageTitleHtml()
        ]);
    }
}
