@extends('layouts.app')

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

    <section class="section blog-wrap pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-12 mb-5">
                            <div class="single-blog-item"><img class="img-fluid" src="images/blog/blog-1.jpg" alt="" />
                                <div class="blog-item-content mt-5">
                                    <div class="blog-item-meta mb-3"><span class="text-color-2 text-capitalize mr-3"> Equipment</span> <span class="text-muted text-capitalize mr-3">5 Comments</span> <span class="text-black text-capitalize mr-3"> 28th January 2019</span></div>
                                    <h2 class="mb-4 text-md"><a href="blog-single.html">Healthy environment to care with modern equipment</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus natus, consectetur? Illum libero vel nihil nisi quae, voluptatem, sapiente necessitatibus distinctio voluptates, iusto qui. Laboriosam autem, nam voluptate in beatae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae iure officia nihil nemo, repudiandae itaque similique praesentium non aut nesciunt facere nulla, sequi sunt nam temporibus atque earum, ratione, labore.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
