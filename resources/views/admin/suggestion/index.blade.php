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
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>ID</th>
                  <th>dokter_id</th>
                  <th>Judul</th>
                  <th>Gambar</th>
                  <th>Isi</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td></td>
                  <td>Gecko</td>
                  <td>Mozilla 1.7</td>
                  <td>Win 98+ / OSX.1+</td>
                  <td>1.7</td>
                  <td>A</td>
                  <td>
                    <a class="btn btn-primary btn-sm" href="#">
                      <i class="fas fa-folder">
                      </i>
                      Lihat
                    </a>
                    <a class="btn btn-info btn-sm" href="#">
                      <i class="fas fa-pencil-alt">
                      </i>
                      Edit
                    </a>
                    <a class="btn btn-danger btn-sm" href="#">
                      <i class="fas fa-trash">
                      </i>
                      Hapus
                    </a>
                  </td>
                </tr>

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