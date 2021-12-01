@extends('layouts.admin')

@section('title', '| Vaksinasi')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Detail Vaksinasi</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->


<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">

                    <div class="card-header">
                        <h3 class="card-title">Detail Vaksinasi</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputName">Tempat</label>
                            <p class="">{{ $vaccine->judul }}</p>
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Provinsi</label>
                            <p class="">{{ $vaccine->province->name }}</p>
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Alamat</label>
                            <p class="">{{ $vaccine->alamat }}</p>
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Jadwal</label>
                            <p class="">{{ $vaccine->jadwal }}</p>
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Jenis</label>
                            <p class="">{{ $vaccine->jenis }}</p>
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Syarat</label>
                            <p class="">{{ $vaccine->syarat }}</p>
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Gambar</label>
                            <img src="{{ $vaccine->gambar }}" alt="">
                        </div>
                    </div>
                    <!-- /.card-body -->

                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>

@endsection