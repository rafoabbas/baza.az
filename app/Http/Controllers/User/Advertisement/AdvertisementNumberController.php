<?php

namespace App\Http\Controllers\User\Advertisement;

use App\Enums\Common\Status;
use App\Helpers\Classes\Helper;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\Advertisement\Number\AdvertisementNumberStoreRequest;
use App\Models\User\Advertisement\AdvertisementOtp;
use App\Repositories\Contracts\Common\Location\NumberRegionRepositoryInterface;
use App\Repositories\Contracts\Common\Location\RegionRepositoryInterface;
use App\Services\Front\Advertisement\AdvertisementNumberService;
use App\Services\Front\Advertisement\AdvertisementOtpService;
use Illuminate\Http\Request;

class AdvertisementNumberController extends Controller
{
    public function __construct(
        public AdvertisementOtpService $otpService,
        public AdvertisementNumberService $numberService,
        public RegionRepositoryInterface $regionRepository,
        public NumberRegionRepositoryInterface $numberRegionRepository,
    ) {
    }

    public function create(AdvertisementOtp $otp)
    {
        $this->otpService->checkOtpSession($otp);

        return view('front.pages.profile.advertisement.number.create', [
            'title' => trans('Satışa nömrə nişanı əlavə edin'),
            'otp' => $otp,
            'numberRegions' => $this->numberRegionRepository->all(
                columns: Helper::select(['id', 'name%', 'region_code']),
                conditions: [['status', '=', Status::published()]]
            ),
            'regions' => $this->regionRepository->all(
                columns: Helper::select(['id', 'name%']),
                conditions: [['status', '=', Status::published()]]
            ),
            'pageTitleHtml' => $this->numberService->pageTitleHtml()
        ]);
    }

    public function store(AdvertisementNumberStoreRequest $request, AdvertisementOtp $otp)
    {
        $this->numberService->store($request, $otp);

        return redirect()->route('index')->withToast();
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
