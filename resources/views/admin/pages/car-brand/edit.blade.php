@extends('admin.layouts.app')

@push('title', __($title))

@push('css')

@endpush

@push('style')

@endpush

@section('content')
    <div class="col-9">
        <form action="{{ $action }}" class="row" method="POST">
            @method($method)
            @csrf
            <div class="col-9">
                <div class="card">
                    <div class="card-body row">
                        @include('admin.common.inputs.text', [ 'col' => 6, 'label' => __('Name'), 'name' => 'name_az', 'value' => $item->name_az, 'example' => '<small class="text-danger">az</small>' ])
                        @include('admin.common.inputs.text', [ 'col' => 6, 'label' => __('Name'), 'name' => 'name_ru', 'value' => $item->name_ru, 'example' => '<small class="text-danger">ru</small>' ])
                        @include('admin.common.inputs.number', [ 'col' => 6, 'label' => __('Order'), 'name' => 'order', 'value' => $item->order ])
                        @include('admin.common.inputs.select', [ 'col' => 6, 'label' => __('Status'), 'name' => 'status', 'value' => $item->status, 'options' => \App\Enums\Common\Status::toArray() ])
                    </div>
                    @include('admin.common.card.footer', ['route' => route('admin.car-brand.index')])
                </div>
            </div>
            <div class="col-3">
                @include('admin.common.inputs.preview', [ 'value' => $item->upload?->getAttribute('id'), 'length' => 1])
            </div>
        </form>
    </div>
@endsection

@push('js')

@endpush

@push('script')

@endpush
