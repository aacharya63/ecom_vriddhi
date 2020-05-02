@extends('vriddhi.layouts.master')
@section('title', 'Login Register')
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
    
        <h2 class="main_hadding_h2 underline margin-bottom_50px">Login</h2>
     
      
    </div>

    <div class="col-md-4">
      <div class="contact-c-box">
        <div class="add-img-boc">
          <img src="{{ asset('front_assets/image/location-icon.png') }}">
        </div>
        
      </div>
    </div>

  </div>

  </div>
</section>

  <section class="book-form-sec">
    <div class="container">
      @if(Session::has('fls_err_msg'))
      <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Error!</strong> {{ Session::get('fls_err_msg') }}
      </div>
      @endif
      @if(Session::has('fls_ul_msg'))
      <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Success!</strong> {{ Session::get('fls_ul_msg') }}
      </div>
      @endif
      
      <div class="row">
        <div class="col-md-12 text-center">
          <div class="center-heading">
            <h2>Sign Up</h2>
          <p>or ask for more information</p>
          </div>
        </div>
        <div class="book-form-box">
          
          <form method="post" action="{{ url('/userRegister') }}">
            @csrf
            <div class="row">
              <div class="col-md-6 {{ $errors->has('name') ? 'has-error' : '' }}">
                <label>Name*</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}">
                <span class="text-danger">{{ $errors->first('name') }}</span>
              </div>
              <div class="col-md-6 {{ $errors->has('email') ? 'has-error' : '' }}">
                <label>Email*</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}">
                <span class="text-danger">{{ $errors->first('email') }}</span>
              </div>

              <div class="col-md-6 {{ $errors->has('mobile') ? 'has-error' : '' }}">
                <label>Mobile*</label>
                <input type="tel" name="mobile" id="mobile" value="{{ old('mobile') }}">
                <span class="text-danger">{{ $errors->first('mobile') }}</span>
              </div>

              <div class="col-md-6 {{ $errors->has('password') ? 'has-error' : '' }}">
                <label>Password*</label>
                <input type="password" name="password" id="password">
                <span class="text-danger">{{ $errors->first('password') }}</span>
              </div>

              <div class="col-md-6 {{ $errors->has('confirm_password') ? 'has-error' : '' }}">
                <label>confirm_password*</label>
                <input type="password" name="confirm_password" id="confirm_password">
                <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
              </div>

              
              <div class="col-md-12 text-center margin-top-30">
                <button class="custom-btn" id="submit">Submit</button>
                <div id="msgSubmit" class="hidden"></div>
                <div class="clearfix"></div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <section class="book-form-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <div class="center-heading">
            <h2>Sign in</h2>
          <p>or ask for more information</p>
          </div>
        </div>
        <div class="book-form-box">
          <form method="post" action="{{ url('userLogin') }}">
            @csrf
            <div class="row">
              <div class="col-md-6 {{ $errors->has('email') ? 'has-error' : '' }}">
                <label>Email*</label>
                <input type="email" name="email" id="email">
                <span class="text-danger">{{ $errors->first('email') }}</span>
              </div>

              <div class="col-md-6 {{ $errors->has('password') ? 'has-error' : '' }}">
                <label>Password*</label>
                <input type="password" name="password" id="password">
                <span class="text-danger">{{ $errors->first('password') }}</span>
              </div>

              
              <div class="col-md-12 text-center margin-top-30">
                <button class="custom-btn" id="submit">Submit</button>
                <div id="msgSubmit" class="hidden"></div>
                <div class="clearfix"></div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <div class="clearfix"></div>
  
</body>
@endsection
