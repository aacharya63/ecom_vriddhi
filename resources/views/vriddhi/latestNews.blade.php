@extends('vriddhi.layouts.master')
@section('title', 'Latest News')
@section('content')
<body>
   <div class="clearfix"></div>
   <section class="inner-banner-sec">
      <div class="inner-baner">
         <img src="{{ asset('front_assets/image/inner-banner.jpg') }}" style="width: 100%">
      </div>
   </section>
   <section class="inner-con">
      <div class="container">
         <div class="row">
            <div class="col-md-7 col-sm-6">
               <div class="about-cont-box">
                  <h2 class="main_hadding_h2 underline margin-bottom_50px">Latest News</h2>
                  <!-- <p><strong>Lorem Ipsum is simply dummy text of the printing and</strong> typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer t</p> -->
               </div>
            </div>
            <div class="col-md-5 col-sm-6">
               <div class="online-store-drop-btn">
                  <select>
                     <option>Latest News</option>
                     <option>Latest News1</option>
                     <option>Latest News2</option>
                  </select>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <img src="{{ asset('front_assets/image/news-main-img.jpg') }}" style="width: 100%">
               <div class="news-v-title">
                  <h3>Coronavirus Update.</h3>
                  <p>16th March 2020</p>
               </div>
            </div>
            <div class="col-md-12">
               <p><strong>Lorem Ipsum is simply dummy text of the printing and</strong> typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen </p>
               <p>popularised in the 1960s with <strong>the release of Letraset sheets containing</strong>Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
            </div>
         </div>
         <hr>
      </div>
   </section>
   <section class="latest-blog-box">
      <div class="container">
         
         @if(!empty($blog_data))
         @foreach($blog_data as $bd)
         <div class="row">
            <div class="col-md-4 col-sm-4">
               <div class="blog-img-box">
                  <img src="{{ url('uploads/blogs/'.$bd->image) }}" style="width: 100%">
               </div>
            </div>
            <div class="col-md-8 col-sm-8">
               <div class="blog-content-box">
                  <div class="news-v-title">
                     <h3>{{ $bd->title }}</h3>
                     <p>{{ $bd->created_at }}</p>
                  </div>
                  <p>{{ $bd->description }}</p>
                  <a href="http://{{ $bd->url }}">Read more</a>
               </div>
            </div>
         </div>
         @endforeach
         @else
         <h1>blog display soon
         @endif
         
         
         <div class="row">
            <div class="col-md-12 text-right">
               <div class="pagination">
                  {{ $blog_data->links() }}
               </div>
            </div>
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
   <div class="clearfix"></div>
</body>
@endsection