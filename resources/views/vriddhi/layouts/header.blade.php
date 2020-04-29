<section class="main-menu">
  <div class="col-md-4 col-xs-12 logo-section">
      <a href="{{ url('/') }}"><img src="{{ asset('front_assets/image/maximon-logo.png') }}" class="logo"></a>
  </div>
      <div class="col-md-8 col-xs-12 menu-section">
        <div class="menu-top-section">
          <ul class="list-inline">
            <li>
              <div class="top-serch-box">
                <form>
                  <input type="text" placeholder="Search..." name="">
                  <button>go</button>
                </form>
              </div>
            </li>
            <li>
              <div class="top-no">
                <a href="#"><h3><i class="fa fa-phone" aria-hidden="true"></i> 0162 8878 066</h3></a>
              </div>
            </li>
            <li>
              <div class="top-cart-sec">
                <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                <span>2</span></a>
              </div>
            </li>
            <li>
              <div class="top-login-sec">
                <a href="#">Login <i class="fa fa-sign-in" aria-hidden="true"></i></a>
              </div>
            </li>
          </ul>
        </div>
        <div class="menu-bar-section">
          <header>
            <nav id='cssmenu'>
            <div id="head-mobile"></div>
            <div class="button"></div>
            <ul>
            <li class='active'><a href="{{ url('/') }}">HOME</a></li>
            <li><a href="{{ url('/about') }}">ABOUT</a></li>
            <li><a href="{{ url('/findRadioBy') }}">FIND RADIOS BY</a>
               <ul>
                  <li><a href='#'>Product 1</a>
                     <ul>
                        <li><a href='#'>Sub Product</a></li>
                        <li><a href='#'>Sub Product</a></li>
                     </ul>
                  </li>
                  <li><a href='#'>Product 2</a>
                     <ul>
                        <li><a href='#'>Sub Product</a></li>
                        <li><a href='#'>Sub Product</a></li>
                     </ul>
                  </li>
               </ul>
            </li>
            <li><a href="{{ url('/radioHire') }}">RADIO HIRE</a></li>
            <li><a href="{{ url('/onlineStore') }}">ONLINE STORE</a></li>
            <li><a href="{{ url('/freeBuyersGuide') }}">FREE BUYER'S GUIDE</a></li>
            <li><a href="{{ url('/latestNews') }}">LATEST NEWS & VIEWS</a></li>
            </ul>
            </nav>
            </header>
        </div>
      </div>
</section>