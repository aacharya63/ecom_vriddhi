@extends('vriddhi.layouts.master')
@section('title', 'About')
@section('content')
<body>
   <div class="clearfix"></div>
   <div class="clearfix"></div>
   <section class="inner-banner-sec">
      <div class="inner-baner">
         @if(!empty($pg_data))
         @foreach($pg_data as $pg)    
         <img src="{{ asset('uploads/frontPages/'.$pg->header_img) }}" style="width: 100%">
         @endforeach
         @else
         <img src="http://vridhisoftech.co.in/sh/waki-taki/public/front_assets/image/inner-banner.jpg" style="width: 100%">
         @endif
      </div>
   </section>
   @if(!empty($pg_data))
   @foreach($pg_data as $pg)
    {!!$pg->description!!}
   @endforeach
   @else
   <h3 class="text-danger">No Slider Available</h3>
   @endif
</body>
@endsection