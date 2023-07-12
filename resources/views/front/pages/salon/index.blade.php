@extends('front.layouts.app')

@section('content')
    <section class="catalog-sec-page catalog-showroom">
        <div class="general-conteiner">
            <h2 class="general-title">@lang('Avtosalon kataloqu')</h2>
            <div class="catalog_bread-crumbs">
                <a href="">@lang('Ana səhifə')</a>
                <p>/ @lang('Avtosalon kataloqu')</p>
            </div>
            @if ($verifiedItems->count())
                <div class="catalog-showroom__ads-wrapper">
                    <h2 class="general-titleV2">@lang('Verified avtosalonlar')</h2>
                    @foreach($verifiedItems as $item)
                        @include('front.pages.partials.auto.salon.list-item', ['item' => $item, 'verified' => true])
                    @endforeach
                </div>
            @endif
            @if ($items->count())
                <div class="catalog-showroom__ads-wrapper">
                    <h2 class="general-titleV2">@lang('Avtosalonlar')</h2>
                    @foreach($items as $item)
                        @include('front.pages.partials.auto.salon.list-item', ['item' => $item])
                    @endforeach
                </div>
            @endif
        </div>
    </section>
@endsection

@push('scripts')
@endpush
