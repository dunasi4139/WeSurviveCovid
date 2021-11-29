@extends('layouts.admin')

@section('title', '| Saran')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Buat Saran</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->

<section class="content">
    <div class="container-fluid">
        <form method="POST" action="{{ route('admin.suggestion.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">

                        <div class="card-header">
                            <h3 class="card-title">Form Saran</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Judul</label>
                                <input name="title" type="text" id="inputName" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Isi</label>
                                <textarea name="content" style="height: 300px" id="inputDescription" class="form-control" rows="4"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Gambar</label>
                                <input name="image" type="file" name="image">
                            </div>

                        </div>
                        <!-- /.card-body -->

                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <input type="submit" value="Tambah" class="btn btn-success float-right">
        </form>
    </div>
</section>

@endsection