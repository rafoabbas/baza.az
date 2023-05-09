<?php

namespace App\Http\Controllers\Admin\Common\Car;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Common\Car\CarBrandRequest;
use App\Http\Requests\Admin\Common\Car\CarModelRequest;
use App\Models\Common\Car\CarBrand;
use App\Models\Common\Car\CarModel;
use App\QueryFilters\Common\NameLangFilter;
use App\QueryFilters\Common\StatusFilter;
use App\Services\Eloquent\Common\Car\CarModelService;

class CarModelController extends Controller
{
    public function __construct(public CarModelService $service)
    {
    }

    public function index(CarBrand $carBrand)
    {
        $items = $this->service->paginate(
            conditions: [
               [ 'car_brand_id', '=' , $carBrand->getAttribute('id')]
            ],
            sorting: $this->sorting(),
            perPage: $this->perPage(),
            filters: [
                NameLangFilter::class,
                StatusFilter::class,
            ]
        );

        return view('admin.pages.car-model.index', [
            'items' => $items,
            'title' => 'Modeller',
            'carBrand' => $carBrand
        ]);
    }

    public function create(CarBrand $carBrand)
    {
        return view('admin.pages.car-model.edit', [
            'title' => 'Model əlavə et',
            'method' => 'post',
            'action' => route('admin.car-brand.model.store', $carBrand->getAttribute('id')),
            'item' => $this->service->props(),
            'carBrand' => $carBrand
        ]);
    }

    public function store(CarModelRequest $request, CarBrand $carBrand)
    {
        $this->service->store($request->validated());

        return to_route('admin.car-brand.model.index', $carBrand->getAttribute('id'))->withToast();
    }

    public function edit(CarBrand $carBrand, CarModel $model)
    {
        return view('admin.pages.car-model.edit', [
            'carBrand' => $carBrand,
            'title' => 'Modeli düzənlə',
            'method' => 'put',
            'action' => route('admin.car-brand.model.update', [
                $carBrand->getAttribute('id'), $model->getAttribute('id')
            ]),
            'item' => $model,
        ]);
    }

    public function update(CarModelRequest $request, CarBrand $carBrand, CarModel $model)
    {
        $this->service->update($model, $request->validated());

        return to_route('admin.car-brand.model.index', $carBrand->getAttribute('id'))->withToast();
    }

    public function destroy(CarBrand $carBrand, CarModel $model)
    {
        $this->service->destroy($model);

        return response()->toast([
            'reload' => true,
        ]);
    }
}
