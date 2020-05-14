@extends('vriddhi.layouts.master')
@section('title', 'Home')
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
   <!-- description -->
   @if(!empty($pg_data))
   @foreach($pg_data as $pg)
    {!!$pg->description!!}
   @endforeach
   @else
   <h3 class="text-danger">No Slider Available</h3>
   @endif
   <!-- description ends -->
</body>
@endsection