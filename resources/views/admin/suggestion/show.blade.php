@extends('layouts.admin')

@section('title', '| Saran')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Detail Saran</h1>
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
                        <h3 class="card-title">Detail Saran</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputName">Judul</label>
                            <p class="">{{ $saran->judul }}</p>
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Isi</label>
                            <p class="">{{ $saran->isi }}</p>
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Gambar</label>
                        </div>
                        <div class="form-group">
                            <img style="max-width:750px; height:auto;" src="{{ asset( $saran->gambar) }}" alt="">
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