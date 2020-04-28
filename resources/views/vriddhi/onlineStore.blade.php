@extends('vriddhi.layouts.master')
@section('title', 'Online Store')
@section('content')

<body>

<div class="clearfix"></div>
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
        <h2 class="main_hadding_h2 underline margin-bottom_50px">Online Store</h2>
      <p><strong>Lorem Ipsum is simply dummy text of the printing and</strong> typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer t</p>
      </div>
    </div>
    <div class="col-md-5 col-sm-6">
      <div class="online-store-drop-btn">
        <select>
          <option>Serach products</option>
          <option>Serach products1</option>
          <option>Serach products2</option>
        </select>
        
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 margin-top-30">
      <p><strong>Lorem Ipsum is simply dummy text of the printing and</strong> typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with <strong>the release of Letraset sheets containing</strong>Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>

       <p>popularised in the 1960s with <strong>the release of Letraset sheets containing</strong>Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>

        
    </div>

 

  </div>
  </div>
</section>

<section class="products-sec-inner">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="main_hadding_h2 underline margin-bottom_50px">New Products</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="new-product-box">
          <div class="new-p-img">
            <img src="{{ asset('front_assets/image/Walki-Talki-2.jpg') }}" style="width: 100%;">
          </div>
          <div class="new-p-cont">
            <p>Pronto PTZ Max CCTV Systems</p>
            <h4>$35.00</h4>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <div class="new-product-box">
          <div class="new-p-img">
            <img src="{{ asset('front_assets/image/Walki-Talki-2.jpg') }}" style="width: 100%;">
          </div>
          <div class="new-p-cont">
            <p>Pronto PTZ Max CCTV Systems</p>
            <h4>$35.00</h4>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <div class="new-product-box">
          <div class="new-p-img">
            <img src="{{ asset('front_assets/image/Walki-Talki-2.jpg') }}" style="width: 100%;">
          </div>
          <div class="new-p-cont">
            <p>Pronto PTZ Max CCTV Systems</p>
            <h4>$35.00</h4>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <div class="new-product-box">
          <div class="new-p-img">
            <img src="{{ asset('front_assets/image/Walki-Talki-2.jpg') }}" style="width: 100%;">
          </div>
          <div class="new-p-cont">
            <p>Pronto PTZ Max CCTV Systems</p>
            <h4>$35.00</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="products-sec-inner">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="main_hadding_h2 underline margin-bottom_50px">Featured Products</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="new-product-box">
          <div class="new-p-img">
            <img src="{{ asset('front_assets/image/Walki-Talki-2.jpg') }}" style="width: 100%;">
          </div>
          <div class="new-p-cont">
            <p>Pronto PTZ Max CCTV Systems</p>
            <h4>$35.00</h4>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <div class="new-product-box">
          <div class="new-p-img">
            <img src="{{ asset('front_assets/image/Walki-Talki-2.jpg') }}" style="width: 100%;">
          </div>
          <div class="new-p-cont">
            <p>Pronto PTZ Max CCTV Systems</p>
            <h4>$35.00</h4>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <div class="new-product-box">
          <div class="new-p-img">
            <img src="{{ asset('front_assets/image/Walki-Talki-2.jpg') }}" style="width: 100%;">
          </div>
          <div class="new-p-cont">
            <p>Pronto PTZ Max CCTV Systems</p>
            <h4>$35.00</h4>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <div class="new-product-box">
          <div class="new-p-img">
            <img src="{{ asset('front_assets/image/Walki-Talki-2.jpg') }}" style="width: 100%;">
          </div>
          <div class="new-p-cont">
            <p>Pronto PTZ Max CCTV Systems</p>
            <h4>$35.00</h4>
          </div>
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

</body>
@endsection
