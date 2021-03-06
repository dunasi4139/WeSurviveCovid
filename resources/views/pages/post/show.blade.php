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
                            <img src="{{ asset( $post->gambar) }}" alt="" class="image">

                            <div class="blog-item-content mt-5">
                                <div class="blog-item-meta mb-3">
                                    <span class="text-black text-capitalize mr-3"><i class="icofont-thumbs-up mr-2"></i>{{ $post->like }}</span>
                                    <span class="text-black text-capitalize mr-3"><i class="icofont-calendar mr-2"></i>{{ $post->created_at }}</span>
                                </div>

                                <h3 class="text-md">{{ $post->judul }}</h3>
                                <div class="divider my-4"></div>
                                <p>{{ $post->isi }}</p>

                            </div>

                            {{-- @can('isMasyarakat') --}}
                            @if($post->user_id == $user->id)
                            <a href="{{ route('post.edit', $post->id) }}" class="btn btn-main-2 btn-round-full mt-3">Edit<i class="icofont-simple-right ml-2"></i></a>
                            @else
                            <div class="col-lg-12">
                                @if($myLike->isEmpty())
                                <a href="{{ route('like.like', [$post->id]) }}">
                                    <span class="text-black text-capitalize mr-3"><i class="icofont-thumbs-up"></i></span> Suka
                                </a>
                                @else
                                <a style="color: #e12454;">
                                    <span class="text-black text-capitalize mr-3"><i class="icofont-thumbs-up"></i></span> Suka
                                </a>
                                @endif
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="comment-area mt-4 mb-5">
                            <h4 class="mb-4">{{ $post->count($post->id) }} Komentar...</h4>

                            @if($post->count($post->id) != 0)
                            <ul class="comment-tree list-unstyled">

                                @foreach($comments as $comment)
                                <li class="mb-5">
                                    <div class="comment-area-box d-flex">
                                        <div class="comment-user mr-3">
                                            <img alt="" src="{{ asset('images/blog/testimonial1.jpg') }}" style="height: 52px; width: auto;" class="image">
                                        </div>

                                        <div>
                                            <div class="comment-info">
                                                <div class="d-flex">
                                                    <h5 class="mr-2">{{ $comment->user->name }}</h5>
                                                    @if($comment->user->role_id == 2)
                                                    <img src="{{ asset('images/verified.png') }}" style="height: 18px; width:auto;" alt="">
                                                    @endif
                                                </div>

                                                <span class="date-comm"> Dipost pada {{ $comment->created_at }}</span>
                                            </div>

                                            <div class="comment-content mt-3">
                                                <p>{{ $comment->isi }}</p>
                                            </div>
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