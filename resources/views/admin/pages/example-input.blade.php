@extends('admin.layouts.app')

@push('title', __($title))

@push('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">@lang('Catalog')</li>
@endpush

@section('content')
    <form action="{{ $action }}" class="row"  method="POST">
        <div class="col-9">
            <div class="card">
                @method($method)
                @csrf
                <div class="card-body row">
                    @include('admin.common.inputs.text', [ 'col' => 6, 'label' => __('Name'), 'name' => 'name_az', 'value' => $item->name_az, 'example' => '<small class="text-danger">az</small>' ])
                    @include('admin.common.inputs.text', [ 'col' => 6, 'label' => __('Name'), 'name' => 'name_ru', 'value' => $item->name_ru, 'example' => '<small class="text-danger">ru</small>' ])
                    @include('admin.common.inputs.number', [ 'col' => 6, 'label' => __('Order'), 'name' => 'order', 'value' => $item->order ])
                    @include('admin.common.inputs.select', [ 'col' => 6, 'label' => __('Status'), 'name' => 'status', 'value' => $item->status, 'options' => \App\Enums\Common\Status::toArray() ])
                    @include('admin.common.inputs.select', [ 'col' => 6, 'label' => __('Featured'), 'name' => 'is_featured', 'value' => $item->is_featured, 'options' => \App\Enums\Common\Boolean::toArray() ])
                    @include('admin.common.inputs.select', [ 'col' => 6, 'label' => __('Filterable'), 'name' => 'is_filterable', 'value' => $item->is_filterable, 'options' => \App\Enums\Common\Boolean::toArray() ])
                </div>
                @include('admin.common.card.footer', ['route' => route('admin.catalog.feature.index')])
            </div>
        </div>
        <div class="col-3">
            @include('admin.common.inputs.preview', ['value' => $item->upload?->getAttribute('id')])
        </div>
    </form>

@endsection
