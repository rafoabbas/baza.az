<?php

namespace App\Http\Controllers\Admin\Common\Auto;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Common\Auto\ClassTypeRequest;
use App\Http\Requests\Admin\Common\Auto\FuelTypeRequest;
use App\Models\Common\Auto\ClassType;
use App\Models\Common\Auto\FuelType;
use App\Models\Common\Car\CarBrand;
use App\QueryFilters\Common\NameLangFilter;
use App\QueryFilters\Common\StatusFilter;
use App\Services\Eloquent\Common\Auto\ClassTypeService;
use App\Services\Eloquent\Common\Auto\FuelTypeService;

class ClassTypeController extends Controller
{
    public function __construct(public ClassTypeService $service)
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

        return view('admin.pages.class-type.index', compact('items'));
    }

    public function create()
    {
        return view('admin.pages.class-type.edit', [
            'title' => 'Klasman əlavə et',
            'method' => 'post',
            'action' => route('admin.class-type.store'),
            'item' => $this->service->props(),
        ]);
    }

    public function store(ClassTypeRequest $request)
    {
        $this->service->store($request->validated());

        return to_route('admin.class-type.index')->withToast();
    }

    public function edit(ClassType $classType)
    {
        return view('admin.pages.class-type.edit', [
            'title' => 'Klasman düzənlə',
            'method' => 'put',
            'action' => route('admin.class-type.update', $classType),
            'item' => $classType,
        ]);
    }

    public function update(ClassTypeRequest $request, ClassType $classType)
    {
        $this->service->update($classType, $request->validated());

        return to_route('admin.class-type.index')->withToast();
    }

    public function destroy(ClassType $classType)
    {
        $this->service->destroy($classType);

        return response()->toast([
            'reload' => true,
        ]);
    }
}
