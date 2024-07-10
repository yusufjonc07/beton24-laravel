@extends('layouts.blank')

@section('content')



<div class="auth-page">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-xxl-3 col-lg-4 col-md-5">
                <div class="auth-full-page-content d-flex p-sm-5 p-4">
                    <div class="w-100">
                        <div class="d-flex flex-column h-100">
                            <div class="mb-4 mb-md-5 text-center">
                                <a href="/" class="d-block auth-logo">
                                    <span class="logo-txt">
                                        <span>
                                            <img src="{{asset(config('app.logo'))}}" width="200" alt="">
                                        </span>
                                    </span>
                                </a>
                            </div>
                            <div class="auth-content my-auto">
                                <div class="text-center">
                                    <h4 class="mb-0">
                                        {{__('app.xush_kelibsiz') }}
                                    </h4>
                                    <p class="text-muted mt-2">
                                        {{__('app.xush_kelibsiz_subtext') }}
                                    </p>
                                </div>
                                <form method="POST" action="{{ route('login') }}" class="mt-4 pt-2">
                                    @csrf

                                    <div class="row mb-3">
                                        <label for="username">{{ __('app.username') }}</label>

                                            <input id="username" type="username"
                                                class="form-control @error('username') is-invalid @enderror"
                                                name="username" value="{{ old('username') }}" required
                                                autocomplete="username" autofocus>

                                            @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                    </div>

                                    <div class="row mb-3">
                                        <label for="password">{{
                                            __('app.password') }}</label>

                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="current-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6 offset-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="mb-3">
                                        <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">
                                            {{ __('app.login') }}
                                        </button>
                                    </div>

                                </form>



                            </div>
                            <div class="mt-4 mt-md-5 text-center">
                                <p class="mb-0">© <script>
                                        document.write(new Date().getFullYear())
                                    </script> UnivERP . Powered <i class="fa fa-code text-danger"></i> by CRUD Group</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end auth full page content -->
            </div>
            <!-- end col -->
            <div class="col-xxl-9 col-lg-8 col-md-7" style="height: 100vh;">
                <div class="auth-bg pt-md-5 p-4 d-flex h-100"
                    style="background-image: url(<?= asset('storage/img/static/6883524_29750.jpg') ?>);">
                    <div class="bg-overlay bg-primary"></div>
                    <ul class="bg-bubbles">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection