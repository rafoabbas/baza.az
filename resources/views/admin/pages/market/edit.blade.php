@extends('admin.layouts.app')

@push('title', __($title))

@push('css')

@endpush

@push('style')

@endpush

@push('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">@lang('Avto')</li>
@endpush

@section('content')
    <div class="col-6">
        <form action="{{ $action }}" class="card" method="POST">
            @method($method)
            @csrf
            <div class="card-body row">
                @include('admin.common.inputs.text', [ 'col' => 6, 'label' => __('Name'), 'name' => 'name_az', 'value' => $item->name_az, 'example' => '<small class="text-danger">az</small>' ])
                @include('admin.common.inputs.text', [ 'col' => 6, 'label' => __('Name'), 'name' => 'name_ru', 'value' => $item->name_ru, 'example' => '<small class="text-danger">ru</small>' ])
                @include('admin.common.inputs.number', [ 'col' => 6, 'label' => __('Order'), 'name' => 'order', 'value' => $item->order ])
                @include('admin.common.inputs.select', [ 'col' => 6, 'label' => __('Status'), 'name' => 'status', 'value' => $item->status, 'options' => \App\Enums\Common\Status::toArray() ])
            </div>
            @include('admin.common.card.footer', ['route' => route('admin.market.index')])
        </form>
    </div>
@endsection

@push('js')

@endpush

@push('script')

@endpush
