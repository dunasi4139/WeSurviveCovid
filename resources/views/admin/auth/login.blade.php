@extends('layouts.admin-auth')
@section('content')
<div class="card-body login-card-body">
    <form method="POST" action="{{ url('/admin/login') }}">
        @csrf
        <div class="input-group mb-3">
            <input name="email" type="email" class="form-control" placeholder="Email">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
        </div>
        <div class="input-group mb-3">
            <input name="password" type="password" class="form-control" placeholder="Kata Sandi">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <div class="icheck-primary">
                    <input type="checkbox" id="remember">
                    <label for="remember">
                        {{ trans('global.remember') }}
                    </label>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">{{ trans('global.login') }}</button>
            </div>
            <!-- /.col -->
        </div>
    </form>

    <p class="mb-1">
        <a href="forgot-password.html">{{ trans('global.forgot') }}</a>
    </p>
</div>
@endsection