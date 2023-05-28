<?php

namespace App\Http\Controllers\Admin\Common\Location;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Common\Location\RegionRequest;
use App\Models\Common\Location\Region;
use App\QueryFilters\Common\NameLangFilter;
use App\QueryFilters\Common\StatusFilter;
use App\Services\Eloquent\Common\Location\RegionService;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    public function __construct(public RegionService $service)
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

        return view('admin.pages.location.region.index', compact('items'));
    }

    public function create()
    {
        return view('admin.pages.location.region.edit', [
            'title' => 'Region əlavə et',
            'method' => 'post',
            'action' => route('admin.region.store'),
            'item' => $this->service->props(),
        ]);
    }

    public function store(RegionRequest $request)
    {
        $this->service->store($request->validated());

        return to_route('admin.region.index')->withToast();
    }

    public function edit(Region $region)
    {
        return view('admin.pages.location.region.edit', [
            'title' => 'Region düzənlə',
            'method' => 'put',
            'action' => route('admin.region.update', $region),
            'item' => $region,
        ]);
    }

    public function update(RegionRequest $request, Region $region)
    {
        $this->service->update($region, $request->validated());

        return to_route('admin.region.index')->withToast();
    }

    public function destroy(Region $region)
    {
        $this->service->destroy($region);

        return response()->toast([
            'reload' => true,
        ]);
    }
}
