@extends('layouts.admin')

@section('title', '| Saran')

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Saran</h1>
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
            <h3 class="card-title">Tabel Saran</h3>
            <a href="{{ route('admin.suggestion.create') }}" class="btn btn-success float-right">
              Tambah
            </a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th style="width: 1%">No.</th>
                  <th style="width: 5%">ID</th>
                  <th style="width: 10%">Judul</th>
                  <th style="width: 10%">Gambar</th>
                  <th style="width: 35%">Isi</th>
                  <th>created_at</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @php
                $n = 1
                @endphp
                @foreach($sarans as $saran)
                <tr>
                  <td>{{ $n }}</td>
                  <td>{{ $saran->id }}</td>
                  <td>{{ $saran->judul }}</td>
                  <td>{{ $saran->gambar }}</td>
                  <td>{{ $saran->isi }}</td>
                  <td>{{ $saran->created_at }}</td>
                  <td>
                    <div class="d-flex">
                      <a class="btn btn-primary btn-sm" href="{{ route('admin.suggestion.show', $saran->id) }}">
                        <i class="fas fa-folder">
                        </i>
                        Lihat
                      </a>
                      <a class="btn btn-info btn-sm mx-2" href="{{ route('admin.suggestion.edit', $saran->id) }}">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Edit
                      </a>
                      <form method="POST" action="{{ route('admin.suggestion.delete', $saran->id) }}" onsubmit="return confirm('Anda yakin?');">
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