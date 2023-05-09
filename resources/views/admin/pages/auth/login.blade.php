@extends('admin.layouts.auth')

@section('content')
    <div class="account-pages my-5 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-4">
                    <div class="card overflow-hidden">
                        <div class="bg-dark">
                            <div class="text-primary text-center p-4">
                                <h5 class="text-white font-size-20">@lang('Hoş geldiniz!')</h5>
                                <p class="text-white-50">@lang('Giriş yapmak için bilgilerinizi girin.')</p>
                                <a href="#" class="logo logo-admin">
                                    <img src="{{ asset('assets/images/logo-sm.png') }}" height="24" alt="logo">
                                </a>
                            </div>
                        </div>
                        <div class="card-body p-4">
                            <div class="p-3">
                                <form class="mt-4" action="{{ route('admin.login') }}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label" for="username">@lang('Kullanıcı adı')</label>
                                        <input type="text" value="{{ old('username') }}"
                                               class="form-control @error('username') is-invalid @enderror"
                                               id="username" name="username" placeholder="@lang('Kullanıcı adı girin')">
                                        @error('username')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="password">@lang('Şifre')</label>
                                        <input name="password" type="password" class="form-control" id="password"
                                               placeholder="@lang('Şifrenizi girin')">
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-sm-6">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" name="remember"
                                                       {{ old('remember') ? 'checked' : '' }} id="remember">
                                                <label class="form-check-label"
                                                       for="remember">@lang('Beni hatırla')</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 text-end">
                                            <button class="btn btn-dark w-md waves-effect waves-light"
                                                    type="submit">@lang('Giriş')</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <p class="mb-0">©
                            <script>document.write(new Date().getFullYear())</script>
                            Sms gönderim sistemi #system
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
