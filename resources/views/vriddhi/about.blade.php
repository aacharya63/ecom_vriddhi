@extends('vriddhi.layouts.master')
@section('title', 'About')
@section('content')

<body>

<div class="clearfix"></div>
<div class="clearfix"></div>
<section class="inner-banner-sec">
  <div class="inner-baner">
    <img src="{{ asset('front_assets/image/inner-banner.jpg') }}" style="width: 100%">
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
