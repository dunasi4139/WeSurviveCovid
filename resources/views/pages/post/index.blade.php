@extends('layouts.app')

@section('title', 'Postingan')

@section('content')
<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block text-center">
                    <h1 class="text-capitalize mb-5 text-lg">Postingan Pengalaman</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section blog-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                
                    @foreach($posts as $post)
                    <div class="col-lg-12 col-md-12 mb-5">
                        <div class="blog-item">
                            <div class="blog-thumb">
                                <img src="{{ $post->gambar }}" alt="" class="image">
                            </div>

                            <div class="blog-item-content">
                                <div class="blog-item-meta mb-3 mt-4">
                                    <span class="text-black text-capitalize mr-3"><i class="icofont-thumbs-up mr-1"></i>{{ $post->like }} penyuka</span>
                                    <span class="text-muted text-capitalize mr-3"><i class="icofont-comment mr-2"></i>{{ $post->count($post->id) }} komentar</span>
                                    <span class="text-black text-capitalize mr-3"><i class="icofont-calendar mr-1"></i>{{ $post->created_at->isoFormat('dddd, D MMMM Y H:i') }}</span>
                                </div>

                                <h2 class="mt-3 mb-3">{{ $post->judul }}</h2>

                                <p class="mb-4">{{ $post->isi }}</p>

                                <a href="{{ route('post.show', $post->id) }}" target="_blank" class="btn btn-main btn-icon btn-round-full">{{ trans('global.more') }}<i class="icofont-simple-right ml-2  "></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>

        </div>


    </div>
</section>

@endsection