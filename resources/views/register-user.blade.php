@extends('layouts.app')

@section('content')
<div class="container pt-5">
    <div class="card mx-auto" style="width: 32rem">
        <div class="card-body p-4">
            <form>
                <div class="mb-3">
                    <h4>Daftar</h4>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Konfirmasi Password</label>
                    <input type="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary w-100 mb-2">Daftar</button>
                <div class="form-text">Apakah anda dokter? daftar untuk dokter <a class="font-weight-bold" style="cursor: pointer">disini.</a></div>
                <div class="form-text">Sudah punya akun? login <a class="font-weight-bold" style="cursor: pointer">disini.</a></div>
            </form>
        </div>
    </div>
</div>
@endsection
