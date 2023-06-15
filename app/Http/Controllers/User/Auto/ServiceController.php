<?php

namespace App\Http\Controllers\User\Auto;

use App\Enums\Common\Status;
use App\Helpers\Classes\Helper;
use App\Http\Controllers\Controller;
use App\Models\User\Auto\Service;
use App\Repositories\Contracts\Common\Auto\ServiceGroupRepositoryInterface;
use App\Repositories\Contracts\Common\Auto\SpecificationRepositoryInterface;
use App\Repositories\Contracts\Common\Car\CarBrandRepositoryInterface;
use App\Repositories\Contracts\Common\Location\RegionRepositoryInterface;
use App\Repositories\Contracts\User\Auto\ServiceRepositoryInterface;
use App\Repositories\Eloquent\Common\Auto\ServiceGroupRepository;
use App\Repositories\Eloquent\Common\Car\CarBrandRepository;
use App\Services\Front\User\Auto\ServiceService;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    public function __construct(
        public ServiceService $service,
        public ServiceRepositoryInterface $serviceRepository,
        public ServiceGroupRepositoryInterface $serviceGroupRepository,
        public CarBrandRepositoryInterface $carBrandRepository,
        public SpecificationRepositoryInterface $specificationRepository,
        public RegionRepositoryInterface $regionRepository
    ) {
    }
    public function show(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('front.pages.profile.business.pages.service.index', [
            'pageTitleHtml' => $this->service->pageTitleHtml()
        ]);
    }
    public function edit(Request $request): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {

        return view('front.pages.profile.business.pages.service.edit', [
            'service' => $this->serviceRepository->first(
                conditions: [
                    ['user_id', '=', Auth::id()]
                ]
            ),
            'groups' => $this->serviceGroupRepository->groups(),
            'brands' => $this->carBrandRepository->all(
                conditions: [
                    ['status', '=', Status::published()]
                ]
            ),
            'specifications' => $this->specificationRepository->all(
                conditions: [
                    ['status', '=', Status::published()]
                ]
            ),
            'regions' => $this->regionRepository->all(
                conditions: [
                    ['status', '=', Status::published()]
                ]
            ),
            'pageTitleHtml' => $this->service->pageTitleHtml([
                'name' => 'Redaktə et'
            ])
        ]);
    }
    public function update(Request $request, Service $service): void
    {
        //
    }
}
