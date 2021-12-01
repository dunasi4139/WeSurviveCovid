@extends('layouts.admin')

@section('title', '| Postingan')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Postingan</h1>
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
                        <h3 class="card-title">Tabel Postingan</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>ID</th>
                                    <th>masyarakat_id</th>
                                    <th>Judul</th>
                                    <th>Gambar</th>
                                    <th>Isi</th>
                                    <th>Like</th>
                                    <th>created_at</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $n = 1
                                @endphp
                                @foreach($posts as $post)
                                <tr>
                                    <td>{{ $n }}</td>
                                    <td>{{ $post->id }}</td>
                                    <td>Gecko</td>
                                    <td>{{ $post->judul }}</td>
                                    <td>{{ $post->gambar }}</td>
                                    <td>{{ $post->isi }}</td>
                                    <td>{{ $post->like }}</td>
                                    <td>{{ $post->created_at }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a class="btn btn-primary btn-sm mr-2" href="{{ route('admin.post.show', $post->id) }}">
                                                <i class="fas fa-folder">
                                                </i>
                                                Lihat
                                            </a>
                                            <form method="POST" action="{{ route('admin.post.delete', $post->id) }}" onsubmit="return confirm('Anda yakin?');">
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