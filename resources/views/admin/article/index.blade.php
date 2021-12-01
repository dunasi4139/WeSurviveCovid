@extends('layouts.admin')

@section('title', '| Dashboard')

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Artikel</h1>
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
            <h3 class="card-title">Tabel Artikel</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>ID</th>
                  <th>user_id</th>
                  <th style="width: 10%">Judul</th>
                  <th style="width: 10%">Gambar</th>
                  <th style="width: 40%">Isi</th>
                  <th>crated_at</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @php
                $n = 1
                @endphp
                @foreach($articles as $article)
                <tr>
                  <td>{{ $n }}</td>
                  <td>{{ $article->id }}</td>
                  <td>{{ $article->user->id }}</td>
                  <td>{{ $article->judul }}</td>
                  <td>{{ $article->gambar }}</td>
                  <td>{{ $article->isi }}</td>
                  <td>{{ $article->created_at }}</td>
                  <td>
                    <div class="d-flex">
                      <a class="btn btn-primary btn-sm mr-2" href="{{ route('admin.article.show', $article->id) }}">
                        <i class="fas fa-folder">
                        </i>
                        Lihat
                      </a>
                      <form method="POST" action="{{ route('admin.article.delete', $article->id) }}" onsubmit="return confirm('Anda yakin?');">
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