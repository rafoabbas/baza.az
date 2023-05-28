<?php

namespace App\Http\Controllers\Admin\Common\Auto;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Common\Auto\BodyTypeRequest;
use App\Models\Common\Auto\BodyType;
use App\QueryFilters\Common\NameLangFilter;
use App\QueryFilters\Common\StatusFilter;
use App\Services\Eloquent\Common\Auto\BodyTypeService;

class BodyTypeController extends Controller
{
    public function __construct(public BodyTypeService $service)
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

        return view('admin.pages.body-type.index', compact('items'));
    }

    public function create()
    {
        return view('admin.pages.body-type.edit', [
            'title' => 'Ban növü əlavə et',
            'method' => 'post',
            'action' => route('admin.body-type.store'),
            'item' => $this->service->props(),
        ]);
    }

    public function store(BodyTypeRequest $request)
    {
        $this->service->store($request->validated());

        return to_route('admin.body-type.index')->withToast();
    }

    public function edit(BodyType $bodyType)
    {
        return view('admin.pages.body-type.edit', [
            'title' => 'Ban növü düzənlə',
            'method' => 'put',
            'action' => route('admin.body-type.update', $bodyType),
            'item' => $bodyType,
        ]);
    }

    public function update(BodyTypeRequest $request, BodyType $bodyType)
    {
        $this->service->update($bodyType, $request->validated());

        return to_route('admin.body-type.index')->withToast();
    }

    public function destroy(BodyType $bodyType)
    {
        $this->service->destroy($bodyType);

        return response()->toast([
            'reload' => true,
        ]);
    }
}
