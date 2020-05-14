@extends('vriddhi.layouts.master')
@section('title', 'Find Radio By')
@section('content')

<body>
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
            <?php 

                $isFirst = true;

                $i=1;   

                foreach ( $category_data as $cd ):
                $cat_name = $cd->name;
                if($i==1)
                {
                        echo '<li class="active-pro"><a href="#">' . $cat_name . '</a></li>';
                }
                else
                {
                        echo '<li><a href="#">' . $cat_name . '</a></li>';
                }
                    $i++;
                  endforeach;
            ?>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="new-product-box">
          <div class="new-p-img">
            <img src="http://vridhisoftech.co.in/sh/waki-taki/public/front_assets/image/Walki-Talki-2.jpg" style="width: 100%;">
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
            <img src="http://vridhisoftech.co.in/sh/waki-taki/public/front_assets/image/Walki-Talki-2.jpg" style="width: 100%;">
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
            <img src="http://vridhisoftech.co.in/sh/waki-taki/public/front_assets/image/Walki-Talki-2.jpg" style="width: 100%;">
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
            <img src="http://vridhisoftech.co.in/sh/waki-taki/public/front_assets/image/Walki-Talki-2.jpg" style="width: 100%;">
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
  <div class="clearfix"></div>
</body>
@endsection
