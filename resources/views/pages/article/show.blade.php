@extends('layouts.app')

@section('title', '| {{ $article->judul }}')

@section('content')

<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block text-center">
                    <span class="text-white">Detail</span>
                    <h1 class="text-capitalize mb-5 text-lg">{{ trans('global.nav.article') }}</h1>
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
                    <img src="{{ $article->gambar }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8">
                <div class="department-content mt-5">
                    <h3 class="text-md">{{ $article->judul }}</h3>
                    <div class="divider my-4"></div>
                    <p class="text-break">{{ $article->isi }}</p>

                    @can('isDokter')
                    @if($article->user->noDokter->no_dokter == $user->noDokter->no_dokter)
                    <a href="{{ route('article.edit', $article->id) }}" class="btn btn-main-2 btn-round-full mt-3">Edit<i class="icofont-simple-right ml-2"></i></a>
                    @endif
                    @endcan
                </div>
            </div>

            <div class="col-lg-4">
                <div class="sidebar-widget schedule-widget mt-5">
                    <h5 class="mb-4">Penulis</h5>

                    <ul class="list-unstyled">
                        <li class="d-flex justify-content-between align-items-center">
                            <a href="#">{{ trans('global.name') }}</a>
                            <span>Dr. {{ $article->user->name }}</span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            <a href="#">No. Izin Praktek</a>
                            <span>{{ $article->user->noDokter->no_dokter }}</span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            <a href="#">Tanggal</a>
                            <span>{{ $article->created_at }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection