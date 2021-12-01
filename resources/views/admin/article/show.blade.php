@extends('layouts.admin')

@section('title', '| Artikel')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Detail Artikel</h1>
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
                        <h3 class="card-title">Detail User</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputName">ID</label>
                            <p class="">{{ $article->user->id }}</p>
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">No. Izin Praktek</label>
                            <p class="">{{ $article->user->noDokter->no_dokter }}</p>
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Nama</label>
                            <p class="">{{ $article->user->name }}</p>
                        </div>

                    </div>
                    <!-- /.card-body -->

                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">

                    <div class="card-header">
                        <h3 class="card-title">Detail Artikel</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputName">Judul</label>
                            <p class="">{{ $article->judul }}</p>
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Isi</label>
                            <p class="">{{ $article->isi }}</p>
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Gambar</label>
                            <img src="{{ $article->gambar }}" alt="">
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