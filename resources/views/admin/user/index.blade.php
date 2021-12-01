@extends('layouts.admin')

@section('title', '| User')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>User</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 1%">
                            #
                        </th>
                        <th style="width: 5%">
                            ID
                        </th>
                        <th style="width: 10%">
                            No. Izin Praktek
                        </th>
                        <th style="width: 20%">
                            Nama
                        </th>
                        <th>
                            Email
                        </th>
                        <th style="width: 8%" class="text-center">
                            Role
                        </th>
                        <th style="width: 20%">
                            created_at
                        </th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $n = 1
                    @endphp
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $n }}</td>
                        <td>{{ $user->id }}</td>
                        <td></td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td class="text-center">
                            @if($user->role_id == 0)
                            <span class="badge bg-success">
                                Admin
                            </span>
                            @elseif($user->role_id == 1)
                            <span class="badge bg-warning">
                                Masyarakat
                            </span>
                            @else
                            <span class="badge bg-primary">
                                Dokter
                            </span>
                            @endif
                        </td>
                        <td>{{ $user->created_at }}</td>
                        <td>
                        <td class="project-actions text-right">
                            @if($user->role_id == 0)
                            <a class="btn btn-info btn-sm mx-2" href="">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            @endif
                        </td>
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

</section>
<!-- /.content -->
@endsection