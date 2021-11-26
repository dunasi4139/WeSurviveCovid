@extends('layouts.app')

@section('title', 'Postingan')

@section('content')

<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">News details</span>
          <h1 class="text-capitalize mb-5 text-lg">Blog Single</h1>
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
              <img src="images/blog/blog-1.jpg" alt="" class="img-fluid">

              <div class="blog-item-content mt-5">
                <div class="blog-item-meta mb-3">
                  <span class="text-black text-capitalize mr-3"><i class="icofont-calendar mr-2"></i> 28th January 2019</span>
                </div>

          
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, rerum beatae repellat tenetur incidunt quisquam libero dolores laudantium. Nesciunt quis itaque quidem, voluptatem autem eos animi laborum iusto expedita sapiente.</p>

              </div>
            </div>
          </div>

          <div class="col-lg-12">
            <div class="comment-area mt-4 mb-5">
              <h4 class="mb-4">2 Comments on Healthy environment... </h4>
              <ul class="comment-tree list-unstyled">
                <li class="mb-5">
                  <div class="comment-area-box">
                    <div class="comment-thumb float-left">
                      <img alt="" src="images/blog/testimonial1.jpg" class="img-fluid">
                    </div>

                    <div class="comment-info">
                      <h5 class="mb-1">John</h5>
                      <span>United Kingdom</span>
                      <span class="date-comm">| Posted April 7, 2019</span>
                    </div>

                    <div class="comment-content mt-3">
                      <p>Some consultants are employed indirectly by the client via a consultancy staffing company, a company that provides consultants on an agency basis. </p>
                    </div>
                  </div>
                </li>

              </ul>
            </div>
          </div>


          <div class="col-lg-12">
            <form class="comment-form my-5" id="comment-form">
              <h4 class="mb-4">Write a comment</h4>

              <textarea class="form-control mb-4" name="comment" id="comment" cols="30" rows="5" placeholder="Comment"></textarea>

              <input class="btn btn-main-2 btn-round-full" type="submit" name="submit-contact" id="submit_contact" value="Submit Message">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection