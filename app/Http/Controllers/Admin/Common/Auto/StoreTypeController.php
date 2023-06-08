<?php

namespace App\Http\Controllers\Admin\Common\Auto;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Common\Auto\StoreTypeRequest;
use App\Models\Common\Auto\StoreType;
use App\QueryFilters\Common\NameLangFilter;
use App\QueryFilters\Common\StatusFilter;
use App\Services\Eloquent\Common\Auto\StoreTypeService;

class StoreTypeController extends Controller
{
    public function __construct(public StoreTypeService $service)
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

        return view('admin.pages.store-type.index', compact('items'));
    }

    public function create()
    {
        return view('admin.pages.store-type.edit', [
            'title' => 'Mağaza tipi əlavə et',
            'method' => 'post',
            'action' => route('admin.store-type.store'),
            'item' => $this->service->props(),
        ]);
    }

    public function store(StoreTypeRequest $request)
    {
        $this->service->store($request->validated());

        return to_route('admin.store-type.index')->withToast();
    }

    public function edit(StoreType $storeType)
    {
        return view('admin.pages.store-type.edit', [
            'title' => 'Mağaza tipi düzənlə',
            'method' => 'put',
            'action' => route('admin.store-type.update', $storeType),
            'item' => $storeType,
        ]);
    }

    public function update(StoreTypeRequest $request, StoreType $storeType)
    {
        $this->service->update($storeType, $request->validated());

        return to_route('admin.store-type.index')->withToast();
    }

    public function destroy(StoreType $storeType)
    {
        $this->service->destroy($storeType);

        return response()->toast([
            'reload' => true,
        ]);
    }
}
