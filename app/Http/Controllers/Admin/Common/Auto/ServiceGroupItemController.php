<?php

namespace App\Http\Controllers\Admin\Common\Auto;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Common\Auto\ServiceGroupItemRequest;
use App\Models\Common\Auto\ServiceGroup;
use App\Models\Common\Auto\ServiceGroupItem;
use App\QueryFilters\Common\NameLangFilter;
use App\QueryFilters\Common\StatusFilter;
use App\Services\Eloquent\Common\Auto\ServiceGroupItemService;

class ServiceGroupItemController extends Controller
{
    public function __construct(public ServiceGroupItemService $service)
    {
    }

    public function index(ServiceGroup $serviceGroup)
    {
        $items = $this->service->paginate(
            conditions: [
               [ 'service_group_id', '=' , $serviceGroup->getAttribute('id')]
            ],
            sorting: $this->sorting(),
            perPage: $this->perPage(),
            filters: [
                NameLangFilter::class,
                StatusFilter::class,
            ]
        );

        return view('admin.pages.service-group-item.index', [
            'items' => $items,
            'title' => 'Servis itemləri',
            'serviceGroup' => $serviceGroup
        ]);
    }

    public function create(ServiceGroup $serviceGroup)
    {
        return view('admin.pages.service-group-item.edit', [
            'title' => 'İtem əlavə et',
            'method' => 'post',
            'action' => route('admin.service-group.item.store', $serviceGroup->getAttribute('id')),
            'item' => $this->service->props(),
            'serviceGroup' => $serviceGroup
        ]);
    }

    public function store(ServiceGroupItemRequest $request, ServiceGroup $serviceGroup)
    {
        $this->service->store($request->validated());

        return to_route('admin.service-group.item.index', $serviceGroup->getAttribute('id'))->withToast();
    }

    public function edit(ServiceGroup $serviceGroup, ServiceGroupItem $item)
    {
        return view('admin.pages.service-group-item..edit', [
            'serviceGroup' => $serviceGroup,
            'title' => 'İtem düzənlə',
            'method' => 'put',
            'action' => route('admin.service-group.item.update', [
                $serviceGroup->getAttribute('id'), $item->getAttribute('id')
            ]),
            'item' => $item,
        ]);
    }

    public function update(ServiceGroupItemRequest $request, ServiceGroup $serviceGroup, ServiceGroupItem $item)
    {
        $this->service->update($item, $request->validated());

        return to_route('admin.service-group.item.index', $serviceGroup->getAttribute('id'))->withToast();
    }

    public function destroy(ServiceGroup $serviceGroup, ServiceGroupItem $item)
    {
        $this->service->destroy($item);

        return response()->toast([
            'reload' => true,
        ]);
    }
}
