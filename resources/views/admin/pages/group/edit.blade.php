@extends('admin.layouts.app')

@push('title', __('Rehber oluştur'))

@push('css')

@endpush

@push('style')

@endpush

@section('content')
    <div class="col-4">
        <form action="{{ $action }}" class="card" method="POST">
            @method($method)
            @csrf
            <div class="card-body">
                @include('admin.common.inputs.text', [ 'label' => __('Name'), 'name' => 'name', 'value' => $item->name ])
            </div>
            @include('admin.common.card.footer', ['route' => route('group.index')])
        </form>
    </div>
@endsection

@push('js')

@endpush

@push('script')

@endpush
