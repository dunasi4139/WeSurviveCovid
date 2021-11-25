@extends('layouts.app')

@section('title', '| Artikel')

@section('content')

<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block text-center">
                    <h1 class="text-capitalize mb-5 text-lg">{{ trans('global.nav.article') }}</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section blog-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-12 col-md-12 mb-5">
                        <div class="blog-item">
                            <div class="blog-thumb">
                                <img src="images/blog/blog-1.jpg" alt="" class="img-fluid ">
                            </div>
                            <div class="blog-item-content">
                                <div class="blog-item-meta mb-3 mt-4">
                                    <span class="text-black text-capitalize mr-3"><i class="icofont-calendar mr-1"></i> 28th January</span>
                                </div>
                                <h2 class="mt-3 mb-3"><a href="blog-single.html">Choose quality service over cheap service all type of things</a></h2>
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis aliquid architecto facere commodi cupiditate omnis voluptatibus inventore atque velit cum rem id assumenda quam recusandae ipsam ea porro, dicta ad.</p>
                                <a href="" target="_blank" class="btn btn-main btn-icon btn-round-full">{{ trans('global.more') }}<i class="icofont-simple-right ml-2  "></i></a>
                            </div>
                        </div>
                    </div>


                    @foreach($articles as $article)
                    <div class="col-lg-12 col-md-12 mb-5">
                        <div class="blog-item">
                            <div class="blog-thumb">
                                <img src="{{ $article->gambar }}" alt="" class="img-fluid ">
                            </div>
                            <div class="blog-item-content">
                                <div class="blog-item-meta mb-3 mt-4">
                                    <span class="text-black text-capitalize mr-3"><i class="icofont-calendar mr-1"></i> {{ $article->created_at->isoFormat('dddd, D MMMM Y H:i') }} </span>
                                </div>
                                <h2 class="mt-3 mb-3">{{ $article->judul }}</h2>
                                <p class="mb-4 ellipsis">{{ $article->isi }}</p>
                                <a href="{{ route('article.show', $article->id) }}" target="_blank" class="btn btn-main btn-icon btn-round-full">{{ trans('global.more') }}<i class="icofont-simple-right ml-2  "></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar-wrap pl-lg-4 mt-5 mt-lg-0">
                    @can('isDokter')
                    <div class="sidebar-widget search  mb-3 ">
                        <a href="{{ route('article.create') }}" class="btn btn-main-2 btn-round-full">Buat Artikel Baru<i class="icofont-simple-right ml-2  "></i></a>
                    </div>
                    @endcan

                    <div class="sidebar-widget latest-post mb-3">
                        <h5>Popular Posts</h5>

                        <div class="py-2">
                            <span class="text-sm text-muted">03 Mar 2018</span>
                            <h6 class="my-2"><a href="#">Thoughtful living in los Angeles</a></h6>
                        </div>

                        <div class="py-2">
                            <span class="text-sm text-muted">03 Mar 2018</span>
                            <h6 class="my-2"><a href="#">Vivamus molestie gravida turpis.</a></h6>
                        </div>

                        <div class="py-2">
                            <span class="text-sm text-muted">03 Mar 2018</span>
                            <h6 class="my-2"><a href="#">Fusce lobortis lorem at ipsum semper sagittis</a></h6>
                        </div>
                    </div>

                    <div class="sidebar-widget category mb-3">
                        <h5 class="mb-4">Categories</h5>

                        <ul class="list-unstyled">
                            <li class="align-items-center">
                                <a href="#">Medicine</a>
                                <span>(14)</span>
                            </li>
                            <li class="align-items-center">
                                <a href="#">Equipments</a>
                                <span>(2)</span>
                            </li>
                            <li class="align-items-center">
                                <a href="#">Heart</a>
                                <span>(10)</span>
                            </li>
                            <li class="align-items-center">
                                <a href="#">Free counselling</a>
                                <span>(5)</span>
                            </li>
                            <li class="align-items-center">
                                <a href="#">Lab test</a>
                                <span>(5)</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection