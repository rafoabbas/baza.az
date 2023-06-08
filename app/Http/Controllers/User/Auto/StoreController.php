<?php

namespace App\Http\Controllers\User\Auto;

use App\Http\Controllers\Controller;
use App\Models\User\Auto\Store;
use App\Repositories\Eloquent\Common\Auto\StoreTypeRepository;
use App\Repositories\Eloquent\Common\Car\CarBrandRepository;
use App\Services\Front\User\Auto\StoreService;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __construct(
        public StoreService $service,
        public StoreTypeRepository $storeTypeRepository,
        public CarBrandRepository $carBrandRepository
    ) {
    }
    public function index(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('front.pages.profile.business.pages.store.index', [
            'pageTitleHtml' => $this->service->pageTitleHtml()
        ]);
    }
    public function edit(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('front.pages.profile.business.pages.store.edit', [
            'storeTypes' => $this->storeTypeRepository->all(),
            'carBrands' => $this->carBrandRepository->all(),
            'pageTitleHtml' => $this->service->pageTitleHtml([
                'name' => 'Redaktə et'
            ])
        ]);
    }
    public function update(Request $request, Store $store): void
    {
        //
    }
    public function destroy(Store $store): void
    {
        //
    }
}
