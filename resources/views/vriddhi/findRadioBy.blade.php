@extends('vriddhi.layouts.master')
@section('title', 'Products')
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
      <div class="col-md-7">
      <div class="about-cont-box">
        <h2 class="main_hadding_h2 underline margin-bottom_50px">Find Radio By</h2>
      
      </div>
    </div>
    <div class="col-md-5">
      <div class="online-store-drop-btn">
        <select>
          <option>Serach products</option>
          <option>Serach products1</option>
          <option>Serach products2</option>
        </select>
        
      </div>
    </div>
  </div>

  </div>
</section>

<section class="products-sec-inner">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="product-tab-bxo">
          <ul class="list-inline">
            <li class="active-pro"><a href="#">CCTV SOLUTIONS</a></li>
            <li><a href="#">CCTV SOLUTIONS</a></li>
            <li><a href="#">CCTV SOLUTIONS</a></li>
            <li><a href="#">CCTV SOLUTIONS</a></li>
            <li><a href="#">CCTV SOLUTIONS</a></li>
            <li><a href="#">CCTV SOLUTIONS</a></li>
          </ul>
        </div>
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


  <section class="book-form-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <div class="center-heading">
            <h2>Book a Hire</h2>
          <p>or ask for more information</p>
          </div>
        </div>
        <div class="book-form-box">
          <form>
            <div class="row">
              <div class="col-md-6">
                <label>Name*</label>
                <input type="text" name="name">
              </div>
              <div class="col-md-6">
                <label>Conmpany*</label>
                <input type="text" name="c-name">
              </div>

              <div class="col-md-6">
                <label>Email*</label>
                <input type="text" name="email">
              </div>

              <div class="col-md-6">
                <label>Phone*</label>
                <input type="text" name="phone">
              </div>

              <div class="col-md-6">
                <label>Hire Start Date*</label>
                <input type="text" name="start-d">
              </div>

              <div class="col-md-6">
                <label>Hire End Date*</label>
                <input type="text" name="end-d">
              </div>

              <div class="col-md-6">
                <label>Postal Address*</label>
                <textarea></textarea>
              </div>

              <div class="col-md-6">
                <label>Extra Information*</label>
                <textarea></textarea>
              </div>
              <div class="col-md-12 text-center margin-top-30">
                <button class="custom-btn">Submit</button>
              </div>
            </div>
          </form>
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
