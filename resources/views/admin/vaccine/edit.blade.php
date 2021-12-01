@extends('layouts.admin')

@section('title', '| Vaksinasi')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Vaksinasi</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->

<section class="content">
    <div class="container-fluid">
        <form method="POST" action="{{ route('admin.vaccine.update', $vaccine->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">

                        <div class="card-header">
                            <h3 class="card-title">Form Vaksinasi</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Tempat</label>
                                <input name="title" type="text" id="title" class="form-control" value="{{ $vaccine->nama }}">
                            </div>
                            <div class="form-group">
                                <label for="province">Provinsi</label>
                                <select class="form-control" name="province">
                                    @foreach ($provinces as $province)
                                    <option value="{{ $province->id }}">{{ $province->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea name="alamat" style="height: 100px" id="alamat" class="form-control" rows="4">{{ $vaccine->alamat }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="jadwal">Jadwal</label>
                                <input name="jadwal" type="text" id="jadwal" class="form-control" value="{{ $vaccine->jadwal }}">
                            </div>
                            <div class="form-group">
                                <label for="jenis">Jenis</label>
                                <input name="jenis" type="text" id="jenis" class="form-control" value="{{ $vaccine->jenis }}">
                            </div>
                            <div class="form-group">
                                <label for="syarat">Syarat</label>
                                <textarea name="syarat" style="height: 200px" id="syarat" class="form-control" rows="4">{{ $vaccine->syarat }}</textarea>
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
            <input type="submit" value="Simpan" class="btn btn-success mb-4">
        </form>
    </div>
</section>

@endsection