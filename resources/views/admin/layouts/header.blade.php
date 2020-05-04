<header class="main-header">
   <a href="index.html" class="logo">
      <!-- Logo -->
      <span class="logo-mini">
      <img src="{{ asset('front_assets/image/maximon-logo.png') }}" alt="">
      </span>
      <span class="logo-lg">
      <img src="{{ asset('front_assets/image/maximon-logo.png') }}" alt="">
      </span>
   </a>
   <!-- Header Navbar -->
   <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
         <!-- Sidebar toggle button-->
         <span class="sr-only">Toggle navigation</span>
         <span class="pe-7s-angle-left-circle"></span>
      </a>
      <!-- searchbar-->
      <a href="#search"><span class="pe-7s-search"></span></a>
      <div id="search">
         <button type="button" class="close">×</button>
         <form>
            <input type="search" value="" placeholder="Search.." />
            <button type="submit" class="btn btn-add">Search...</button>
         </form>
      </div>
      <div class="navbar-custom-menu">
         <ul class="nav navbar-nav">
            <!-- user -->
            <li class="submenu">
               <a href="#">
                  @if(!empty(Auth::user()->img))
                  <img src="{{ url('uploads/profile/'.Auth::user()->img) }}" class="img-circle" width="45" height="45" alt="{{ Auth::user()->name }}">
                  @else
                  <img src="{{ asset('front_assets/image/maximon-logo.png') }}" class="img-circle" width="45" height="45" alt="user">
                  @endif
               
               </a>
               <ul class="ul_submenu dropdown-menu" style="display:none">
                  <li>
                     <a href="{{ url('admin/adminEditProfile/'.Auth::user()->id) }}">
                     <i class="fa fa-user"></i> Edit Profile</a>
                  </li>
                  <li>
                     <a href="{{ url('admin/changePassword/'.Auth::user()->id) }}">
                     <i class="fa fa-user"></i> Change Password</a>
                  </li>
                  <!-- <li><a href="#"><i class="fa fa-inbox"></i> Inbox</a></li> -->
                  <li><a href="{{ url('admin/logout') }}">
                     <i class="fa fa-sign-out"></i> Signout</a>
                  </li>
               </ul>
            </li>
         </ul>
      </div>
   </nav>
</header>