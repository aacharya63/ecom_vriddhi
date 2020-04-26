@extends('vriddhi.layouts.master')
@section('content')

<body>
  


<div class="clearfix"></div>
<section class="main-slider">
  <div class="banner-slider">
    @if(!empty($banner_data))
    @foreach($banner_data as $bd)
    <div class="slide">
      <img src="{{ asset('uploads/banner/'.$bd->img) }}" class="img-responsive">
      <div class="">
        <div class="banner-con">
          <h1 class="text-{{ $bd->text_style }}">{{ $bd->name }}</h1>
          <p class="text-{{ $bd->text_style }}">{{ $bd->content }}</p>
          <button class="custom-btn"><a href="http://{{ ($bd->link) }}" target="_BLANK" style="text-decoration: none;">Read more</a></button>
        </div>
      </div>
    </div>
    
    @endforeach
    @else
    <h3 class="text-danger">No Slider Available</h3>
    @endif
    
  </div>
</section>

<!-- About section start -->
<section class="home-about-sec">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div class="h-a-cont">
          <h1 class="main_hadding_h1">About us</h1>

          <h4>Maximon Solutions Ltd – is a wholly independent U.K. based company, specialising in the design & manufacture of advanced two way radio, GPS tracking and other communication accessories to a global market place.</h4>

          <p>Maximon Solutions Ltd – is a wholly independent U.K. based company, specialising in the design & manufacture of advanced two way radio, GPS tracking and other communication accessories to a global market place.  With extensive experience in Military Radio Communications our founder has been able to transfer this to commercial two way radio, allowing the production of innovative and effective products. It also ensures a strict military ethos is used to retain high standards throughout the company. The plain reality is we do what we say we’ll do when we say we’ll do it! Maximon Solutions Ltd – is a wholly independent U.K. based company, specialising in the design & manufacture of advanced two way radio, GPS tracking and other communication accessories to a global market place.  With extensive experience in Military Radio Communications our founder has been able to transfer this to commercial two way radio, allowing the production of innovative and effective products. It also ensures a strict military ethos is used to retain high standards throughout the company. The plain reality is we do what we say we’ll do when we say we’ll do it!</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="h-img-box">
          <img src="{{ asset('front_assets/image/about-img.jpg') }}" class="img-responsive">
        </div>
      </div>
    </div>
   </div>
</section><!-- About section close -->
<div class="clearfix"></div>
<!-- our products section start -->
<section>
  <div class="container">
    <div class="row">
      <div class="our_product_main_box">
        <h2 class="main_hadding_h2 underline margin-bottom_50px">Our Products</h2>
        <div class="col-md-4 col-sm-6">
          <div class="our_product_box">
            <img src="{{ asset('front_assets/image/1.jpg') }}" class="img-responsive">
            <h4 class="main_hadding_h4">CCTV Solutions</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <a href="#" class="read_more">Read More...</a>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="our_product_box">
            <img src="{{ asset('front_assets/image/1.jpg') }}" class="img-responsive">
            <h4 class="main_hadding_h4">Airband</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <a href="#" class="read_more">Read More...</a>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="our_product_box">
            <img src="{{ asset('front_assets/image/1.jpg') }}" class="img-responsive">
            <h4 class="main_hadding_h4">Marine Band</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <a href="#" class="read_more">Read More...</a>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="our_product_box">
            <img src="{{ asset('front_assets/image/1.jpg') }}" class="img-responsive">
            <h4 class="main_hadding_h4">Unlicensed Private Radio</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <a href="#" class="read_more">Read More...</a>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="our_product_box">
            <img src="{{ asset('front_assets/image/1.jpg') }}" class="img-responsive">
            <h4 class="main_hadding_h4">Unlicensed Business Radio</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <a href="#" class="read_more">Read More...</a>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="our_product_box">
            <img src="{{ asset('front_assets/image/1.jpg') }}" class="img-responsive">
            <h4 class="main_hadding_h4">Unlicensed Digital Radio</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <a href="#" class="read_more">Read More...</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- our products section close -->
<div class="clearfix"></div>
<!-- Latest products section strat -->
<!-- <section>
  <div class="container">
    <div class="row">
      <div class="Latest_product_main_box">
        <h2 class="main_hadding_h2 underline margin-bottom_50px">Latest Products</h2>
        <div class="col-md-3">
          <div class="Latest_product_box">
            <img src="image/Walki-Talki-2.jpg" class="img-responsive">
            <h5 class="main_hadding_h5">HD waterproof Night Vishion cctv camera ...</h5>
            <a href="#" class="btn custom-btn2"> Add To Cart</a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="Latest_product_box">
            <img src="image/cctv.jpg" class="img-responsive">
            <h5 class="main_hadding_h5">HD waterproof Night Vishion cctv camera ...</h5>
            <a href="#" class="btn custom-btn2"> Add To Cart</a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="Latest_product_box">
            <img src="image/Walki-Talki-2.jpg" class="img-responsive">
            <h5 class="main_hadding_h5">HD waterproof Night Vishion cctv camera ...</h5>
            <a href="#" class="btn custom-btn2"> Add To Cart</a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="Latest_product_box">
            <img src="image/cctv.jpg" class="img-responsive">
            <h5 class="main_hadding_h5">HD waterproof Night Vishion cctv camera ...</h5>
            <a href="#" class="btn custom-btn2"> Add To Cart</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> --><!-- Latest products section close -->
<section class="Latest_product_section">
  <div class="container">
     
  
  
      <div class="Latest_product_main_box">
        <h2 class="main_hadding_h2 underline margin-bottom_50px">Latest Products</h2>
       <div class="Latest-product-slider">
          <div class="slide">
            <div class="col-md-12">
              <div class="Latest_product_box">
                <img src="{{ asset('front_assets/image/Walki-Talki-2.jpg') }}" class="img-responsive">
                <h5 class="main_hadding_h5">HD waterproof Night Vishion cctv camera ...</h5>
                <a href="#" class="btn custom-btn2"> Add To Cart</a>
              </div>
            </div>
          </div>
          <div class="slide">
            <div class="col-md-12">
              <div class="Latest_product_box">
                <img src="{{ asset('front_assets/image/cctv.jpg') }}" class="img-responsive">
                <h5 class="main_hadding_h5">HD waterproof Night Vishion cctv camera ...</h5>
                <a href="#" class="btn custom-btn2"> Add To Cart</a>
              </div>
            </div>
          </div>
          <div class="slide">
            <div class="col-md-12">
              <div class="Latest_product_box">
                <img src="{{ asset('front_assets/image/Walki-Talki-2.jpg') }}" class="img-responsive">
                <h5 class="main_hadding_h5">HD waterproof Night Vishion cctv camera ...</h5>
                <a href="#" class="btn custom-btn2"> Add To Cart</a>
              </div>
            </div>
          </div>
          <div class="slide">
            <div class="col-md-12">
              <div class="Latest_product_box">
                <img src="{{ asset('front_assets/image/cctv.jpg') }}" class="img-responsive">
                <h5 class="main_hadding_h5">HD waterproof Night Vishion cctv camera ...</h5>
                <a href="#" class="btn custom-btn2"> Add To Cart</a>
             </div>
            </div> 
          </div>
          <div class="slide">
            <div class="col-md-12">
              <div class="Latest_product_box">
                <img src="{{ asset('front_assets/image/Walki-Talki-2.jpg') }}" class="img-responsive">
                <h5 class="main_hadding_h5">HD waterproof Night Vishion cctv camera ...</h5>
                <a href="#" class="btn custom-btn2"> Add To Cart</a>
              </div>
            </div>
          </div>
      </div>

        
  </div>
  </div>
</section  >
<div class="clearfix"></div>
<!----------------- testimonial section start --------->
<section class="testimonial_section">
  <div class="container">
    <div class="row">
      <h2 class="main_hadding_h2 underline margin-bottom_50px">Testimonials</h2>
      <div class="testimonial_main_box">
        <div class="col-md-6 col-sm-6">
          <div class="testimonial_box">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,</p>
             <div class="testimonials_img_triangal">
              <img src="{{ asset('front_assets/image\testimonial-img\triangle_PNG34.png') }}" class="img-responsive">
            </div>
            <div class="row">
              <div class="testimonial_img_box">
              <div class="col-md-3">
                <div class="testimonials_img">
                  <img src="{{ asset('front_assets/image\testimonial-img\profile2.jpg') }}" class="img-responsive">
                </div>
              </div>
              <div class="col-md-9">
                <div class="testimonial_rating">
                <h6 class="main_hadding_h6">George Simons<span class="testimonial_profession">-Lawyer</span></h6>
                <ul class="list-inline">
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
                </ul>
              </div>
              </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-sm-6">
          <div class="testimonial_box">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,</p>
            <div class="testimonials_img_triangal">
              <img src="{{ asset('front_assets/image\testimonial-img\triangle_PNG34.png') }}" class="img-responsive">
            </div>
            <div class="row">
              <div class="testimonial_img_box">
              <div class="col-md-3">
                <div class="testimonials_img">
                  <img src="{{ asset('front_assets/image\testimonial-img\profile2.jpg') }}" class="img-responsive">
                </div>
              </div>
              <div class="col-md-9">
                <div class="testimonial_rating">
                <h6 class="main_hadding_h6">George Simons<span class="testimonial_profession">-Lawyer</span></h6>
                <ul class="list-inline">
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
                </ul>
              </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-------- testimonial section close ---------->

<!-------- resion section start ---------->
<section class="resion_section" style="background-image: url('{{ asset('front_assets/image/resion-bg.jpg') }}');">
  <div class="container-fluid">
    <div class="row">
      <p class="resion-hading">Reasons behind our successful deliverables!.</p>
      <div class="resion_main_box">
        <div class="resion-img">
          <img src="{{ asset('front_assets/image/cctv.jpg') }}">
        </div>
      </div>
    </div>
  </div>
</section>
<!-------- resion section close ---------->
<section>
  <div class="container">
    <div class="row">
      <h2 class="main_hadding_h2 underline margin-bottom_50px">Our Partner</h2>
      <div class="client-logo" >
        <div class="slide"><img src="https://www.vridhisoftech.com/img/logo/1.png"></div>
        <div class="slide"><img src="https://www.vridhisoftech.com/img/logo/2.png"></div>
        <div class="slide"><img src="https://www.vridhisoftech.com/img/logo/3.png"></div>
        <div class="slide"><img src="https://www.vridhisoftech.com/img/logo/4.png"></div>
        <div class="slide"><img src="https://www.vridhisoftech.com/img/logo/6.png"></div>
        <div class="slide"><img src="https://www.vridhisoftech.com/img/logo/7.png"></div>
        <div class="slide"><img src="https://www.vridhisoftech.com/img/logo/8.png"></div>
        <div class="slide"><img src="https://www.vridhisoftech.com/img/logo/9.png"></div>
        <div class="slide"><img src="https://www.vridhisoftech.com/img/logo/10.png"></div>
      </div>
    </div>
  </div>
</section>
<div class="clearfix"></div>

</body>
@endsection
