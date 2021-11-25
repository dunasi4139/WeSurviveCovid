@extends('layouts.app')

@section('content')

<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <h1 class="text-capitalize mb-5 text-lg">{{ trans('global.nav.vaccine') }}</h1>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="section doctor-single">
	<div class="container">
		<div class="row mb-5">
			<div class="col-lg-4 col-md-6">
				<div class="doctor-img-block">
					<img src="images/team/1.jpg" alt="" class="img-fluid w-100">
				</div>
			</div>

			<div class="col-lg-8 col-md-6">
				<div class="doctor-details mt-4 mt-lg-0">
					<h2 class="text-md">Stadiun Bla Bla Bla</h2>
					<div class="divider my-4"></div>
                    <p>Alamat : jl. Gatot Subroto No. xxx Desa xxx MLG</p>
                    <p>Jadwal : Senin - Kamis jam 9</p>
                    <p>Jenis : Sinovac</p>
                    <p>Persyaratan : 17th Keatas</p>
					<a href="appoinment.html" class="btn btn-main-2 btn-round-full mt-3">Daftar Vaksin<i class="icofont-simple-right ml-2  "></i></a>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
