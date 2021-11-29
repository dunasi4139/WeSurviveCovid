@extends('layouts.app')

@section('title', '| Edit Postingan')

@section('content')
<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block text-center">
                    <h1 class="text-capitalize mb-5 text-lg">Edit {{ trans('global.nav.article') }}</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="card mx-auto">
            <div class="card-body p-4">


                <form method="POST" action="{{ route('post.update', $post->id) }}" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">{{ trans('global.title') }}</label>
                        <input type="text" value="{{$post->judul}}"  class="form-control @error('title') is-invalid @enderror" name="title" required autocomplete="title" autofocus>
                        @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">{{ trans('global.content') }}</label>
                        <textarea style="height: 300px" type="text" class="form-control @error('content') is-invalid @enderror" name="content" value="{{ old('content') }}" required autocomplete="title" autofocus>{{$post->isi}}</textarea>
                        @error('content')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary w-100 mt-3 mb-2">Simpan</button>
                </form>

            </div>
        </div>
    </div>
</section>

@endsection