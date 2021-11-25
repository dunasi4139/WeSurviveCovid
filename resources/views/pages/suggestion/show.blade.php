@extends('layouts.app')

@section('content')

<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block text-center">
                    <span class="text-white">Detail</span>
                    <h1 class="text-capitalize mb-5 text-lg">{{ trans('global.nav.suggestion') }}</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section department-single">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="department-img">
                    <img src="images/service/bg-1.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="department-content mt-5">
                    <h3 class="text-md">{{ $suggestion->judul }}</h3>
                    <div class="divider my-4"></div>
                    <p class="">{{ $suggestion->isi }}</p>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection