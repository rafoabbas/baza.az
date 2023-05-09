<?php

namespace App\Http\Controllers\Admin\Common\Car;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Common\Car\CarBrandRequest;
use App\Models\Common\Car\CarBrand;
use App\QueryFilters\Common\NameLangFilter;
use App\QueryFilters\Common\StatusFilter;
use App\Services\Eloquent\Common\Car\CarBrandService;
use Illuminate\Http\Request;

class CarBrandController extends Controller
{
    public function __construct(public CarBrandService $service)
    {
    }

    public function index()
    {
        $items = $this->service->paginate(
            sorting: $this->sorting(),
            perPage: $this->perPage(),
            filters: [
                NameLangFilter::class,
                StatusFilter::class,
            ]
        );

        return view('admin.pages.car-brand.index', compact('items'));
    }

    public function create()
    {
        return view('admin.pages.car-brand.edit', [
            'title' => 'Marka əlavə et',
            'method' => 'post',
            'action' => route('admin.car-brand.store'),
            'item' => $this->service->props(),
        ]);
    }

    public function store(CarBrandRequest $request)
    {
        $this->service->store($request->validated());

        return to_route('admin.car-brand.index')->withToast();
    }

    public function edit(CarBrand $carBrand)
    {
        return view('admin.pages.car-brand.edit', [
            'title' => 'Marka düzənlə',
            'method' => 'put',
            'action' => route('admin.car-brand.update', $carBrand),
            'item' => $carBrand,
        ]);
    }

    public function update(CarBrandRequest $request, CarBrand $carBrand)
    {
        $this->service->update($carBrand, $request->validated());

        return to_route('admin.car-brand.index')->withToast();
    }

    public function destroy(CarBrand $carBrand)
    {
        $this->service->destroy($carBrand);

        return response()->toast([
            'reload' => true,
        ]);
    }
}
