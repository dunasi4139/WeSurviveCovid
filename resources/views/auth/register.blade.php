@extends('layouts.app')

@section('content')
<section class="section">
    <div class="container">
        <div class="card mx-auto" style="width: 32rem">
            <div class="card-body p-4">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-3">
                        <h4>Daftar</h4>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">{{ trans('global.name') }}</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">{{ trans('global.email') }}</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">{{ trans('global.password') }}</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Konfirmasi {{ trans('global.password') }}</label>
                        <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <button type="submit" class="btn btn-primary w-100 mb-2">{{ trans('global.register') }}</button>
                    <div class="form-text">Apakah anda dokter? {{ trans('global.register') }} untuk dokter <a class="font-weight-bold" style="cursor: pointer" href="{{ route('register-dokter') }}">di sini</a></div>
                    <div class="form-text">Sudah punya akun? {{ trans('global.login') }} <a class="font-weight-bold" style="cursor: pointer" href="{{ route('login') }}">di sini</a></div>
                </form>
            </div>
        </div>
    </div>
</section>
    @endsection