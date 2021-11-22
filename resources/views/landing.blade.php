@extends('layouts.app')

@section('content')
<div class="container pt-5">
    <div class="row pt-lg-5">
        <div class="col-lg d-flex align-items-center">
            <div class="position-relative">
                <h1>SELAMAT DATANG DI WEBSITE WESURVIVECOVID</h1>
                <h4>Silahkan login atau daftar untuk melanjutkan</h4>
            </div>
        </div>
        <div class="col-lg d-flex justify-content-center">
            <div class="card mx-auto" style="width: 32rem">
                <div class="card-body p-4">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary w-100 mb-2">Login</button>
                        <div class="form-text">Belum punya akun? daftar <a class="font-weight-bold" style="cursor: pointer">disini.</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection