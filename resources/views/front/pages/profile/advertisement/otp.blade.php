@extends('front.layouts.app')

@section('content')
    <section class="add-ads-no-regist-section">
        <div class="general-conteiner">
            <div class="add-ads-no-regist-section__ads-info">
                <div class="add-ads-no-regist-section__ads-wrapper">
                    <h2 class="add-ads-no-regist-section__new-ads-title">Otp code</h2>
                    <form action="{{ route('advertisement.check.otp', $otp) }}" class="add-ads-no-regist-section__form" method="post">
                        @csrf
                        <p class="add-ads-no-regist-section__form-title">@lang('Elan yerləşdirmək üçün telefon nömrənizi daxil edin'):
                        </p>
                        <div class="add-ads-no-regist-section__form-row">
                            <div class="input-main__prise-inp">
                                <input name="otp_code" class="@error('phone') is-otp_code @enderror" type="text" value="{{ old('otp_code', $otp->getAttribute('otp_code')) }}" placeholder="xxxx">

                            </div>
                            <div class="add-ads-no-regist-section__form-bt-wrapper">
                                <button type="submit" class="btn1">@lang('Davam et')</button>
                            </div>
                        </div>
                        @error('phone')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
