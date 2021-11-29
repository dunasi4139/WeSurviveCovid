@extends('layouts.admin')

@section('title', '| Saran')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Saran</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->

<section class="content">
    <div class="container-fluid">
        <form method="POST" action="{{ route('admin.suggestion.update', $saran->id) }}" enctype="multipart/form-data">
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
                                <input name="title" type="text" id="inputName" value="{{ $saran->judul }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Isi</label>
                                <textarea name="content" style="height: 300px" id="inputDescription" class="form-control" rows="4">{{ $saran->isi }}</textarea>
                            </div>

                        </div>
                        <!-- /.card-body -->

                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <input type="submit" value="Simpan" class="btn btn-success float-right">
        </form>
    </div>
</section>

@endsection