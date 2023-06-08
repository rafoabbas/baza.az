<?php

namespace App\Http\Controllers\Admin\Common\Auto;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Common\Auto\ServiceGroupRequest;
use App\Models\Common\Auto\ServiceGroup;
use App\Models\Common\Car\CarBrand;
use App\QueryFilters\Common\NameLangFilter;
use App\QueryFilters\Common\StatusFilter;
use App\Services\Eloquent\Common\Auto\ServiceGroupService;

class ServiceGroupController extends Controller
{
    public function __construct(public ServiceGroupService $service)
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

        return view('admin.pages.service-group.index', compact('items'));
    }

    public function create()
    {
        return view('admin.pages.service-group.edit', [
            'title' => 'Servis grupu əlavə et',
            'method' => 'post',
            'action' => route('admin.service-group.store'),
            'item' => $this->service->props(),
        ]);
    }

    public function store(ServiceGroupRequest $request)
    {
        $this->service->store($request->validated());

        return to_route('admin.service-group.index')->withToast();
    }

    public function edit(ServiceGroup $serviceGroup)
    {
        return view('admin.pages.service-group.edit', [
            'title' => 'Servis grupu düzənlə',
            'method' => 'put',
            'action' => route('admin.service-group.update', $serviceGroup),
            'item' => $serviceGroup,
        ]);
    }

    public function update(ServiceGroupRequest $request, CarBrand $serviceGroup)
    {
        $this->service->update($serviceGroup, $request->validated());

        return to_route('admin.service-group.index')->withToast();
    }

    public function destroy(ServiceGroup $serviceGroup)
    {
        $this->service->destroy($serviceGroup);

        return response()->toast([
            'reload' => true,
        ]);
    }
}
