@extends('layouts.admin')

@section('title', '| Vaksinasi')

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Vaksinasi</h1>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Tabel Vaksinasi</h3>
            <a href="{{ route('admin.vaccine.create') }}" class="btn btn-success float-right">
              Tambah
            </a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th style="width: 1%">No.</th>
                  <th style="width: 1%">ID</th>
                  <th style="width: 10%">Gambar</th>
                  <th style="width: 10%">Tempat</th>
                  <th style="width: 10%">Provinsi</th>
                  <th style="width: 20%">Alamat</th>
                  <th style="width: 15%">Jadwal</th>
                  <th style="width: 5%">Jenis</th>
                  <th style="width: 10%">Syarat</th>
                  <th style="width: 10%">created_at</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @php
                $n = 1
                @endphp
                @foreach($vaccines as $vaccine)
                <tr>
                  <td>{{ $n }}</td>
                  <td>{{ $vaccine->id }}</td>
                  <td>{{ $vaccine->gambar }}</td>
                  <td>{{ $vaccine->nama }}</td>
                  <td>{{ $vaccine->province->name }}</td>
                  <td>{{ $vaccine->alamat }}</td>
                  <td>{{ $vaccine->jadwal }}</td>
                  <td>{{ $vaccine->jenis }}</td>
                  <td>{{ $vaccine->syarat }}</td>
                  <td>{{ $vaccine->created_at }}</td>
                  <td>
                    <div class="d-flex">
                      <a class="btn btn-primary btn-sm" href="{{ route('admin.vaccine.show', $vaccine->id) }}">
                        <i class="fas fa-folder">
                        </i>
                        Lihat
                      </a>
                      <a class="btn btn-info btn-sm mx-2" href="{{ route('admin.vaccine.edit', $vaccine->id) }}">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Edit
                      </a>
                      <form method="POST" action="{{ route('admin.vaccine.delete', $vaccine->id) }}" onsubmit="return confirm('Anda yakin?');">
                        @csrf
                        <button class="btn btn-danger btn-sm" type="submit">
                          <i class="fas fa-trash">
                          </i>
                          Hapus
                        </button>
                      </form>
                    </div>
                  </td>
                </tr>
                @php
                $n = $n + 1
                @endphp
                @endforeach
              </tbody>

            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->


        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
@endsection