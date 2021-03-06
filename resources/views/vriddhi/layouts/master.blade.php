<!DOCTYPE html>
<html>
<head>
    <title>@yield('title') - Maxmoon</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('front_assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('front_assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('front_assets/css/aos.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
</head>
<body>

    
@include('vriddhi.layouts.header')
@yield('content')
<div class="clearfix"></div>
<section class="our-client-sec">
  <div class="container">
    <div class="row">
      <h2 class="main_hadding_h2 underline margin-bottom_50px">Our Partner</h2>
      <div class="client-logo" >
        <div class="slide"><img src="https://www.vridhisoftech.com/img/logo/1.png"></div>
        <div class="slide"><img src="https://www.vridhisoftech.com/img/logo/2.png"></div>
        <div class="slide"><img src="https://www.vridhisoftech.com/img/logo/3.png"></div>
        <div class="slide"><img src="https://www.vridhisoftech.com/img/logo/4.png"></div>
        <div class="slide"><img src="https://www.vridhisoftech.com/img/logo/6.png"></div>
        <div class="slide"><img src="https://www.vridhisoftech.com/img/logo/7.png"></div>
        <div class="slide"><img src="https://www.vridhisoftech.com/img/logo/8.png"></div>
        <div class="slide"><img src="https://www.vridhisoftech.com/img/logo/9.png"></div>
        <div class="slide"><img src="https://www.vridhisoftech.com/img/logo/10.png"></div>
      </div>
    </div>
  </div>
</section>
<div class="clearfix"></div>
@include('vriddhi.layouts.footer')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('front_assets/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front_assets/js/custom.js') }}"></script>
<script type="text/javascript" src="{{ asset('front_assets/js/slick.js') }}"></script>


<script>
  (function($) {
$.fn.menumaker = function(options) {  
 var cssmenu = $(this), settings = $.extend({
   format: "dropdown",
   sticky: false
 }, options);
 return this.each(function() {
   $(this).find(".button").on('click', function(){
     $(this).toggleClass('menu-opened');
     var mainmenu = $(this).next('ul');
     if (mainmenu.hasClass('open')) { 
       mainmenu.slideToggle().removeClass('open');
     }
     else {
       mainmenu.slideToggle().addClass('open');
       if (settings.format === "dropdown") {
         mainmenu.find('ul').show();
       }
     }
   });
   cssmenu.find('li ul').parent().addClass('has-sub');
multiTg = function() {
     cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
     cssmenu.find('.submenu-button').on('click', function() {
       $(this).toggleClass('submenu-opened');
       if ($(this).siblings('ul').hasClass('open')) {
         $(this).siblings('ul').removeClass('open').slideToggle();
       }
       else {
         $(this).siblings('ul').addClass('open').slideToggle();
       }
     });
   };
   if (settings.format === 'multitoggle') multiTg();
   else cssmenu.addClass('dropdown');
   if (settings.sticky === true) cssmenu.css('position', 'fixed');
resizeFix = function() {
  var mediasize = 1000;
     if ($( window ).width() > mediasize) {
       cssmenu.find('ul').show();
     }
     if ($(window).width() <= mediasize) {
       cssmenu.find('ul').hide().removeClass('open');
     }
   };
   resizeFix();
   return $(window).on('resize', resizeFix);
 });
  };
})(jQuery);

(function($){
$(document).ready(function(){
$("#cssmenu").menumaker({
   format: "multitoggle"
});
});
})(jQuery);

</script>

<script>
   $(".banner-slider").slick({
        autoplay: true,
        autoplaySpeed: 10000,
        dots: false,
        arrows: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: !0,
        margin: 0,
        responsive: [{
            breakpoint: 1200,
            settings: {
                slidesToShow: 1
            }
        }, {
            breakpoint: 992,
            settings: {
                slidesToShow: 1
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }, {
            breakpoint: 670,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    });
</script>
<script>
   $(".Latest-product-slider").slick({
        autoplay: true,
        autoplaySpeed: 10000,
        dots: false,
        arrows: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        infinite: !0,
        margin: 0,
        responsive: [{
            breakpoint: 1200,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 4
            }
        }, {
            breakpoint: 992,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        }, {
            breakpoint: 670,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    });
</script>


<script>
   $(".client-logo").slick({
        autoplay: true,
        autoplaySpeed: 3000,
        dots: true,
        arrows: false,
        slidesToShow: 5,
        slidesToScroll: 5,
        infinite: !0,
        margin: 5,
        responsive: [{
            breakpoint: 1200,
            settings: {
                slidesToShow: 5
            }
        }, {
            breakpoint: 992,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3
            }
        }, {
            breakpoint: 670,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        }]
    });


   $(".mobile-menu-icon .fa-bars").click(function(){
  $(".home-menu").toggle();
});
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>

<script type="text/javascript">

    $('.date').datepicker({  

       format: 'mm-dd-yyyy'

     });  

</script>
    @include('sweetalert::alert')
</body>

</html>