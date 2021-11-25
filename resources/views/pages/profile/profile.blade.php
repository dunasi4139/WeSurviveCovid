@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block text-center">
                    <span class="text-white">Doctor Details</span>
                    <h1 class="text-capitalize mb-5 text-lg">Alexandar james</h1>

                    <!-- <ul class="list-inline breadcumb-nav">
                      <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
                      <li class="list-inline-item"><span class="text-white">/</span></li>
                      <li class="list-inline-item"><a href="#" class="text-white-50">Doctor Details</a></li>
                    </ul> -->
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
                    <h2 class="text-md">Duwik Purnama Sidik</h2>
                    <div class="divider my-4"></div>
                    <p>Email : dwdadwda</p>
               </div>
            </div>
        </div>
    </div>
</section>

<section class="section doctor-qualification gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title mb-2">
                    <h3>Postingan Saya</h3>
                    <div class="divider my-4"></div>
                </div>
            </div>
        </div>

        <div class="d-flex flex-wrap" style="flex-direction: row">

           <div class="card w-50" style="border-radius: 0">
               <div class="card-body">
                   <h4 class="mb-3 title-color">MBBS, M.D at University of Wyoming</h4>
                   <p>Lorem, consectetur adipisicing elit. Nisi doloremque harum, mollitia, soluta maxime porro veritatis fuga autem impedit corrupti aperiam sint, architecto, error nesciunt temporibus! Vel quod, dolor aliquam!</p>
                   <div class="row p-2">
                       <a class="btn btn-primary btn-sm text-white m-1" style="cursor:pointer;">Edit</a>
                       <a class="btn btn-danger btn-sm text-white m-1" style="cursor:pointer;">Delete</a>
                   </div>
               </div>
           </div>

        </div>
    </div>
</section>
@endsection
