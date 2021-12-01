@extends('layouts.admin')

@section('title', '| Postingan')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Detail Postingan</h1>
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
                            <p class="">{{ $post->user->id }}</p>
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Nama</label>
                            <p class="">{{ $post->user->name }}</p>
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
                        <h3 class="card-title">Detail Postingan</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputName">Judul</label>
                            <p class="">{{ $post->judul }}</p>
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Isi</label>
                            <p class="">{{ $post->isi }}</p>
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Gambar</label>
                            <img src="{{ $post->gambar }}" alt="">
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