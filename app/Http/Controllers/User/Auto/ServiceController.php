<?php

namespace App\Http\Controllers\User\Auto;

use App\Http\Controllers\Controller;
use App\Models\User\Auto\Service;
use App\Repositories\Eloquent\Common\Auto\ServiceGroupRepository;
use App\Repositories\Eloquent\Common\Car\CarBrandRepository;
use App\Services\Front\User\Auto\ServiceService;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function __construct(
        public ServiceService $service,
        public ServiceGroupRepository $serviceGroupRepository,
        public CarBrandRepository $carBrandRepository
    ) {
    }
    public function index(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('front.pages.profile.business.pages.service.index', [
            'pageTitleHtml' => $this->service->pageTitleHtml()
        ]);
    }
    public function edit(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('front.pages.profile.business.pages.service.edit', [
            'serviceGroups' => $this->serviceGroupRepository->groups(),
            'carBrands' => $this->carBrandRepository->all(),
            'pageTitleHtml' => $this->service->pageTitleHtml([
                'name' => 'Redaktə et'
            ])
        ]);
    }
    public function update(Request $request, Service $service): void
    {
        //
    }
    public function destroy(Service $service): void
    {
        //
    }
}
