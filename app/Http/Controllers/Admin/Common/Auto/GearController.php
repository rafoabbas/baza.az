<?php

namespace App\Http\Controllers\Admin\Common\Auto;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Common\Auto\GearRequest;
use App\Models\Common\Auto\Gear;
use App\QueryFilters\Common\NameLangFilter;
use App\QueryFilters\Common\StatusFilter;
use App\Services\Eloquent\Common\Auto\GearService;

class GearController extends Controller
{
    public function __construct(public GearService $service)
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

        return view('admin.pages.gear.index', compact('items'));
    }

    public function create()
    {
        return view('admin.pages.gear.edit', [
            'title' => 'Marka əlavə et',
            'method' => 'post',
            'action' => route('admin.gear.store'),
            'item' => $this->service->props(),
        ]);
    }

    public function store(GearRequest $request)
    {
        $this->service->store($request->validated());

        return to_route('admin.gear.index')->withToast();
    }

    public function edit(Gear $gear)
    {
        return view('admin.pages.gear.edit', [
            'title' => 'Marka düzənlə',
            'method' => 'put',
            'action' => route('admin.gear.update', $gear),
            'item' => $gear,
        ]);
    }

    public function update(GearRequest $request, Gear $gear)
    {
        $this->service->update($gear, $request->validated());

        return to_route('admin.gear.index')->withToast();
    }

    public function destroy(Gear $gear)
    {
        $this->service->destroy($gear);

        return response()->toast([
            'reload' => true,
        ]);
    }
}
