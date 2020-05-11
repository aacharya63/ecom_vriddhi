@extends('vriddhi.layouts.master')
@section('title', 'About')
@section('content')

<body>

<div class="clearfix"></div>
<div class="clearfix"></div>
<section class="inner-banner-sec">
  <div class="inner-baner">
    @if(!empty($FrontPages))
    @foreach($FrontPages as $fp)    
    <img src="{{ url('uploads/frontPages/'.$fp->header_img) }}" style="width: 100%">
    @endforeach
    @else
    <img src="{{ url('front_assets/image/inner-banner.jpg') }}" style="width: 100%">
    @endif
  </div>

</section>

<!-- @if(!empty($FrontPages))
@foreach($FrontPages as $fp)
{!!html_entity_decode($fp->description)!!}
@endforeach
@else
<h1 class="text-center text-danger">Content Not Available</h1>
@endif -->
<section class="inner-con">
  <div class="container">
   
  <div class="row">
      <div class="col-md-7">
      <div class="about-cont-box">
        <h2 class="main_hadding_h2 underline margin-bottom_50px">About us</h2>
      <!-- about us main content 1 -->
      </div>
    </div>
    <div class="col-md-5">
      <div class="about-right-img">
        <img src="image/about-img2.jpg" style="width: 100%;">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 text-center">
      <!-- about us main content 2 -->
    </div>
      <!-- about us main content 3 -->
  </div>
  </div>
</section>

<section class="inner-page-cont">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="contact-text-inner">
          <p>Our Staff are <strong>available</strong> 9:00 - 17:30 on <strong>01628 878 066</strong> to answer your quetions</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="cont-btn-box">
          <button>VIEW OUR PRODUCTS</button>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
@endsection
