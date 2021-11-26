@extends('layouts.app')

@section('title', 'Postingan')

@section('content')

<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block text-center">
                    <span class="text-white">Detail</span>
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
                    <div class="col-lg-12 mb-5">
                        <div class="single-blog-item">
                            <img src="{{ $post->gambar }}" alt="" class="img-fluid">

                            <div class="blog-item-content mt-5">
                                <div class="blog-item-meta mb-3">
                                    <span class="text-black text-capitalize mr-3"><i class="icofont-calendar mr-2"></i>{{ $post->created_at }}</span>
                                </div>

                                <h3 class="text-md">{{ $post->judul }}</h3>
                                <div class="divider my-4"></div>
                                <p>{{ $post->isi }}</p>

                            </div>

                            @can('isMasyarakat')
                            @if($post->user_id == $user->id)
                            <a href="{{ route('post.edit', $post->id) }}" class="btn btn-main-2 btn-round-full mt-3">Edit<i class="icofont-simple-right ml-2"></i></a>
                            @endif
                            @endcan
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="comment-area mt-4 mb-5">
                            <h4 class="mb-4">{{ $post->count($post->id) }} Komentar...</h4>

                            @if($post->count($post->id) != 0)
                            <ul class="comment-tree list-unstyled">

                                @foreach($comments as $comment)
                                <li class="mb-5">
                                    <div class="comment-area-box">
                                        <div class="comment-thumb float-left">
                                            <img alt="" src="{{ asset('images/blog/testimonial1.jpg') }}" class="img-fluid">
                                        </div>

                                        <div class="comment-info">
                                            <h5 class="mb-1">{{ $comment->user->name }}</h5>
                                            <span class="date-comm"> Dipost pada {{ $comment->created_at }}</span>
                                        </div>

                                        <div class="comment-content mt-3">
                                            <p>{{ $comment->isi }}</p>
                                        </div>
                                    </div>
                                </li>
                                @endforeach

                            </ul>
                            @endif
                        </div>
                    </div>


                    <div class="col-lg-12">
                        <form class="comment-form my-5" id="comment-form" method="POST" action="{{ route('comment.store', [$post->id]) }}" enctype="multipart/form-data">
                            @csrf
                            <h4 class="mb-4">Tulis komentar</h4>

                            <textarea type="text" class="form-control mb-4" name="comment" id="comment" cols="30" rows="5" required></textarea>

                            <button class="btn btn-main-2 btn-round-full" type="submit">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection