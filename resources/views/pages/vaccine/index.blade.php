@extends('layouts.app')

@section('title', '| Vaksinasi')

@section('content')

    <section class="page-title bg-1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <h1 class="text-capitalize mb-5 text-lg">{{ trans('global.nav.vaccine') }}</h1>
                        <div class="card w-100 mb-3">
                            <div class="card-body" style="flex-direction: row">
                                <h5>Filter</h5>
                                <form action="">
                                    <select class="form-control" name="filter" id="filter" onchange="submit(filter)">
                                        @foreach ($provinsi as $p)
                                            <option value="{{ $p->id }}">{{ $p->name }}</option>
                                        @endforeach
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    @foreach ($data as $d)
        <section class="section doctor-single">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-4 col-md-6">
                        <div class="doctor-img-block">
                            <img src="images/team/1.jpg" alt="" class="img-fluid w-100">
                        </div>
                    </div>

                    <div class="col-lg-8 col-md-6">
                        <div class="doctor-details mt-4 mt-lg-0">
                            <h2 class="text-md">{{ $d->nama }}</h2>
                            <div class="divider my-4"></div>
                            <p>Alamat : {{ $d->alamat }}</p>
                            <p>Jadwal : {{ $d->jadwal }}</p>
                            <p>Jenis : {{ $d->jenis }}</p>
                            <p>Persyaratan : {{ $d->syarat }}</p>
                        </div>
                    </div>
                    {{-- {{ $data->links() }} --}}
                </div>
            </div>
        </section>
    @endforeach

@endsection

<script>
    function submit(id) {
        document.getElementById(id).submit();
    }
</script>
