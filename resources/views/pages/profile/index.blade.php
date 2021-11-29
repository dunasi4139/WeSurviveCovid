@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block text-center">
                    <h1 class="text-capitalize mb-5 text-lg">Profil</h1>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section doctor-single">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="doctor-img-block">
                    <img src="images/team/1.jpg" alt="" class="img-fluid w-100">
                </div>
            </div>

            <div class="col-lg-8 col-md-6">
                <div class="doctor-details mt-4 mt-lg-0">
                    <h2 class="text-md">{{ $user->name }}</h2>
                    <div class="divider my-4"></div>
                    <p>Email: {{ $user->email }}</p>

                    @if($user->role_id == 2)
                    <p>No. Izin Praktek: {{ $user->noDokter->no_dokter }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section doctor-qualification pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title mb-2">
                    <h3>Postingan Saya</h3>
                    <div class="divider my-4"></div>
                </div>
            </div>
        </div>

        <div class="row">
            @if(!$contents->isEmpty())
            @foreach($contents as $content)
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service-block mb-5">
                    <img src="images/service/service-1.jpg" alt="" class="img-fluid">
                    <div class="content">
                        <h4 class="mt-4 mb-2 title-color">{{ $content->judul }}</h4>
                        <p class="mb-4 ellipsis text-break">{{ $content->isi }}</p>
                    </div>
                    @if($user->role_id == 2)
                    <div class="d-flex">
                        <a href="{{ route('article.show', $content->id) }}" target="_blank" class="p-2 px-3 btn btn-main btn-round-full">Lihat</a>
                        <a href="{{ route('article.edit', $content->id) }}" target="_blank" class="p-2 px-3 mx-2 btn btn-main btn-round-full">Edit</a>
                        <form method="POST" action="{{ route('article.delete', $content->id) }}" onsubmit="return confirm('Anda yakin?');">
                            @csrf
                            <button type="submit" class="p-2 px-3 btn btn-main-2 btn-round-full">Hapus</button>
                        </form>
                    </div>
                    @else
                    <div class="d-flex">
                        <a href="{{ route('post.show', $content->id) }}" target="_blank" class="p-2 px-3 btn btn-main btn-round-full">Lihat</a>
                        <a href="{{ route('post.edit', $content->id) }}" target="_blank" class="p-2 px-3 mx-2 btn btn-main btn-round-full">Edit</a>
                        <form method="POST" action="{{ route('post.delete', $content->id) }}" onsubmit="return confirm('Anda yakin?');">
                            @csrf
                            <button type="submit" class="p-2 px-3 btn btn-main-2 btn-round-full">Hapus</button>
                        </form>
                    </div>
                    @endif
                </div>
            </div>
            @endforeach
            @endif
        </div>

    </div>
</section>
@endsection