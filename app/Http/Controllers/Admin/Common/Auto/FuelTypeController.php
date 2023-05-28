<?php

namespace App\Http\Controllers\Admin\Common\Auto;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Common\Auto\FuelTypeRequest;
use App\Models\Common\Auto\FuelType;
use App\Models\Common\Car\CarBrand;
use App\QueryFilters\Common\NameLangFilter;
use App\QueryFilters\Common\StatusFilter;
use App\Services\Eloquent\Common\Auto\FuelTypeService;

class FuelTypeController extends Controller
{
    public function __construct(public FuelTypeService $service)
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

        return view('admin.pages.fuel-type.index', compact('items'));
    }

    public function create()
    {
        return view('admin.pages.fuel-type.edit', [
            'title' => 'Yanacaq növü əlavə et',
            'method' => 'post',
            'action' => route('admin.fuel-type.store'),
            'item' => $this->service->props(),
        ]);
    }

    public function store(FuelTypeRequest $request)
    {
        $this->service->store($request->validated());

        return to_route('admin.fuel-type.index')->withToast();
    }

    public function edit(CarBrand $fuelType)
    {
        return view('admin.pages.fuel-type.edit', [
            'title' => 'Yanacaq növü düzənlə',
            'method' => 'put',
            'action' => route('admin.fuel-type.update', $fuelType),
            'item' => $fuelType,
        ]);
    }

    public function update(FuelTypeRequest $request, FuelType $fuelType)
    {
        $this->service->update($fuelType, $request->validated());

        return to_route('admin.fuel-type.index')->withToast();
    }

    public function destroy(FuelType $fuelType)
    {
        $this->service->destroy($fuelType);

        return response()->toast([
            'reload' => true,
        ]);
    }
}
