<?php

namespace App\Http\Controllers\Advertisement;

use App\Http\Controllers\Controller;
use App\Services\Front\Advertisement\AdvertisementCommonService;

class AdvertisementController extends Controller
{
    public function __construct(
        public AdvertisementCommonService $advertisementCommonService
    ) {
    }

    public function create()
    {
        return view('front.pages.profile.add.select-ads');
    }
}
