@extends('layouts.app')

@section('title', 'Saran')

@section('content')

<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block text-center">
                    <h1 class="text-capitalize mb-5 text-lg">{{ trans('global.nav.suggestion') }}</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section service-2">
    <div class="container">
        <div class="row">

            @foreach($suggestions as $suggestion)
            <div class="col-lg-4 col-md-6 ">
                <div class="department-block mb-5">
                    <img src="images/service/service-1.jpg" alt="" class="img-fluid w-100">
                    <div class="content">
                        <h4 class="mt-4 mb-2 title-color">{{ $suggestion->judul }}</h4>
                        <p class="mb-4 ellipsis">{{ $suggestion->isi }}</p>
                        <a href="{{ route('suggestion.show', $suggestion->id) }}" class="read-more">{{ trans('global.more') }}<i class="icofont-simple-right ml-2"></i></a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

@endsection