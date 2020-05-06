@extends('vriddhi.layouts.master')
@section('title', 'Free Buyers Guide')
@section('content')

<body>
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

@if(!empty($FrontPages))
@foreach($FrontPages as $fp)
{!!html_entity_decode($fp->description)!!}
@endforeach
@else
<h1 class="text-center text-danger">Content Not Available</h1>
@endif

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
  <div class="clearfix"></div>
</body>
@endsection
