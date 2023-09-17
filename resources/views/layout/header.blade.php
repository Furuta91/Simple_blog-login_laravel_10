<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>{{$title}}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-space-dynamic.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/animated.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.css')}}">
<!--
    
TemplateMo 562 Space Dynamic

https://templatemo.com/tm-562-space-dynamic

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-15">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="{{route("dashboards.index")}}" class="logo">
              <h4>Karya<span> Mahasiswa</span></h4>
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="{{route("dashboards.index")}}" class="nav-link {{($title === 'Home') ? 'active' : ''}}">Home</a></li>
              <li class="scroll-to-section"><a href="{{route("dashboards.about")}}" class="nav-link {{($title === 'About Us') ? 'active' : ''}}">About Us</a></li>
              <li class="scroll-to-section"><a href="{{route("dashboards.seni")}}" class="nav-link {{($title === 'Karya Seni Terbaik') ? 'active' : ''}}">Karya Seni Terbaik</a></li>
              <li class="scroll-to-section"><a href="{{route("dashboards.blog")}}" class="nav-link {{($title === 'Blog') ? 'active' : ''}}">Blog</a></li> 
              <li class="scroll-to-section"><a href="{{route("dashboards.kontak")}}" class="nav-link {{($title === 'Message Us') ? 'active' : ''}}">Message Us</a></li> 
              @guest
                <li class="scroll-to-section"><div class="main-red-button"><a href="{{ route('login') }}">Login</a></div></li>  
              @endguest
              @auth
                <li class="scroll-to-section"><a href="{{ route('admins.index') }}" class="nav-link {{($title === 'Admin') ? 'active' : ''}}">Admin</a></li> 
                <li class="scroll-to-section"><div class="main-red-button"><a href="{{ route('logout') }}">Logout</a></div></li>  
              @endauth
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <p>&nbsp;</p>

 