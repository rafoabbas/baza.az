<?php

namespace App\Http\Controllers\Common\Auto;

use App\Enums\Common\Status;
use App\Http\Controllers\Controller;
use App\Models\User\Auto\Salon;
use App\Repositories\Contracts\Common\Auto\SpecificationRepositoryInterface;
use App\Repositories\Contracts\Common\Location\RegionRepositoryInterface;
use App\Repositories\Contracts\User\Auto\SalonRepositoryInterface;
use App\Services\Front\User\Auto\SalonService;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SalonController extends Controller
{
    public function __construct(
        public SalonService $service,
        public SalonRepositoryInterface $salonRepository,
        public SpecificationRepositoryInterface $specificationRepository,
        public RegionRepositoryInterface $regionRepository
    ) {
    }

    public function index(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('front.pages.salon.index', [
            'items' => $this->salonRepository->all(
                conditions: [
                    ['published', '=', Status::published],
                    ['verified_at', '=', null ]
                ]
            ),
            'verifiedItems' => $this->salonRepository->all(
                conditions: [
                    ['published', '=', Status::published],
                    ['verified_at', '!=', null ]
                ]
            )
        ]);
    }

    public function show(Salon $salon): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('front.pages.salon.show', [
            'item' => $salon
        ]);
    }
}
