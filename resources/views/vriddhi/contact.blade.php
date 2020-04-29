@extends('vriddhi.layouts.master')
@section('title', 'Contact')
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
      <div class="col-md-12">
    
        <h2 class="main_hadding_h2 underline margin-bottom_50px">Contact</h2>
     
      
    </div>

    <div class="col-md-4">
      <div class="contact-c-box">
        <div class="add-img-boc">
          <img src="{{ asset('front_assets/image/location-icon.png') }}">
        </div>
        <div class="add-con-box">
          <p><strong>Maximo Solution</strong><br> 22 Soho Mills, wooburn Green, Buckinghamshire HP10 OPF</p>
          <p>Sat Nav Post Code : HP10 OPF</p>
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
          <form method="post" action="{{ url('/userContact') }}">
            @csrf
            <div class="row">
              <div class="col-md-6 {{ $errors->has('name') ? 'has-error' : '' }}">
                <label>Name*</label>
                <input type="text" name="name">
                <span class="text-danger">{{ $errors->first('name') }}</span>
              </div>
              <div class="col-md-6 {{ $errors->has('comp_name') ? 'has-error' : '' }}">
                <label>Conmpany*</label>
                <input type="text" name="comp_name">
                <span class="text-danger">{{ $errors->first('comp_name') }}</span>
              </div>

              <div class="col-md-6 {{ $errors->has('uemail') ? 'has-error' : '' }}">
                <label>Email*</label>
                <input type="email" name="uemail">
                <span class="text-danger">{{ $errors->first('uemail') }}</span>
              </div>

              <div class="col-md-6 {{ $errors->has('phone') ? 'has-error' : '' }}">
                <label>Phone*</label>
                <input type="text" name="phone">
                <span class="text-danger">{{ $errors->first('phone') }}</span>
              </div>

              <div class="col-md-6 {{ $errors->has('start_date') ? 'has-error' : '' }}">
                <label>Hire Start Date*</label>
                <input type="text" name="start_date">
                <span class="text-danger">{{ $errors->first('start_date') }}</span>
              </div>

              <div class="col-md-6 {{ $errors->has('end_date') ? 'has-error' : '' }}">
                <label>Hire End Date*</label>
                <input type="text" name="end_date">
                <span class="text-danger">{{ $errors->first('end_date') }}</span>
              </div>

              <div class="col-md-6 {{ $errors->has('postal_addr') ? 'has-error' : '' }}">
                <label>Postal Address*</label>
                <textarea name="postal_addr"></textarea>
                <span class="text-danger">{{ $errors->first('postal_addr') }}</span>
              </div>

              <div class="col-md-6 {{ $errors->has('extra_info') ? 'has-error' : '' }}">
                <label>Extra Information*</label>
                <textarea name="extra_info"></textarea>
                <span class="text-danger">{{ $errors->first('extra_info') }}</span>
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
