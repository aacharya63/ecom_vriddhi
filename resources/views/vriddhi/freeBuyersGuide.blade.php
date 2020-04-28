@extends('vriddhi.layouts.master')
@section('title', 'Free Buyer')
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
          <h2 class="main_hadding_h2 underline margin-bottom_50px">Free Buyer's Guide</h2>
        <p>It also ensures a strict military ethos is used to retain high standards throughout the company. The plain reality is we do what we say we’ll do when we say we’ll do it! Maximon Solutions Ltd – is a wholly independent U.K. based company, specialising in the design & manufacture of advanced two way radio, GPS tracking and other communication accessories to a global market place. </p>
        <p>It also ensures a strict military ethos is used to retain high standards throughout the company. The plain reality is we do what we say we’ll do when we say we’ll do it! Maximon Solutions</p>
        </div>
      </div>
      <div class="col-md-5">
        <div class="about-right-img">
          <img src="{{ asset('front_assets/image/free-buyers.jpg') }}" style="width: 100%;">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="free-heading-box">
          The Checklist covers 12 factors you need to consider when selecting a two way radio, including
        </div>
        <div class="free-con-bxo">
          <p><i class="fa fa-long-arrow-right" aria-hidden="true"></i>It also ensures a strict military ethos is used to retain high standards</p>
        <p><i class="fa fa-long-arrow-right" aria-hidden="true"></i>It also ensures a strict military ethos is used to retain high standards</p>
        <p><i class="fa fa-long-arrow-right" aria-hidden="true"></i>It also ensures a strict military ethos is used to retain high standards</p>
        <p><i class="fa fa-long-arrow-right" aria-hidden="true"></i>It also ensures a strict military ethos is used to retain high standards</p>
        <p><i class="fa fa-long-arrow-right" aria-hidden="true"></i>It also ensures a strict military ethos is used to retain high standards</p>
        </div>
        <p><strong>It also ensures a strict military ethos is used to retain high standards throughout the company. The plain reality is we do wh</strong></p>
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
