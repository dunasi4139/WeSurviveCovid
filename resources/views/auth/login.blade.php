@extends('layouts.app')

@section('content')
<div class="container pt-5">
    <div class="card mx-auto" style="width: 32rem">
        <div class="card-body p-4">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-3">
                    <h4>{{ trans('global.login') }}</h4>
                </div>



                <div class="mb-3">
                    <label class="form-label">{{ trans('global.email') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">{{ trans('global.password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ trans('global.remember') }}
                        </label>
                    </div>
                </div>


                <button type="submit" class="btn btn-primary w-100 mb-2">{{ trans('global.login') }}</button>
                <!-- gak ada fitur ini 
                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ trans('global.forgot') }}?
                </a>
                @endif
                -->
                <div class="form-text">Belum punya akun? {{ trans('global.register') }} <a href="{{ route('register') }}" class="font-weight-bold" style="cursor: pointer"
                            href="{{ route('login') }}">di sini</a></div>
            </form>
        </div>
    </div>
</div>
@endsection