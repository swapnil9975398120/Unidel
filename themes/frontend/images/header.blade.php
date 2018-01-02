<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page_title')</title>
    <link rel="shortcut icon" href="/favicon.ico">
      <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- FontAwesome CDN -->

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="{{ asset('themes/frontend') }}/css/custom.css" rel="stylesheet">

    <link href="{{ asset('themes/frontend') }}/css/program.css" rel="stylesheet">
     <link href="{{ asset('themes/frontend') }}/css/style.css" rel="stylesheet">

   <!--  <link href="{{ asset('themes/frontend') }}/css/style-nav.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('themes/frontend') }}/css/the-force.css"> -->
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <!-- slider css -->
    <link href="{{ asset('themes/frontend') }}/css/slick.css" rel="stylesheet">
    <link href="{{ asset('themes/frontend') }}/css/slick-theme.css" rel="stylesheet">

    @yield('page_css')
</head>
<section class="main-navigation">
         <div class="container">
      <!-- Static navbar -->
      <nav class="">
        <div class="container-fluid">
          <div class="">
            <a class="navbar-brand" href="#">
              <img src="{{ asset('themes/frontend') }}/images/isme-logo.png" class="img-responsive">
            </a>
          </div>
          <div id="" class="">
            
            <ul class="nav navbar-nav navbar-right">
              <li class="active hidden-xs"><a href="#">Programs</a></li>
              <li class="hidden-xs"><a href="#">Life at ISME</a></li>
              <li class="hidden-xs"><a href="#">Faculty</a></li>
              <li class="hidden-xs"><a href="#"><i class="fa fa-phone phone-icon" aria-hidden="true"></i><span class="ph-num">+91 8433910202 </span></a></li>
              <li class="nav-icon">
                <nav class="fullscreen-nav">
                    <ul class="main-menu">
                        <div class="topo flexcenter">
                            <li class="active hidden-sm hidden-md hidden-lg"><a href="#">Programs</a></li>
                           <li class="hidden-sm hidden-md hidden-lg"><a href="#">Life at ISME</a></li>
                           <li class="hidden-sm hidden-md hidden-lg"><a href="#">Faculty</a></li>
                           <li class="hidden-sm hidden-md hidden-lg"><a href="#"><i class="fa fa-phone phone-icon" aria-hidden="true"></i><span class="ph-num">+91 8433910202 </span></a></li>

                            <li><a href="#" class="nav-link">About</a></li>
                            <li><a href="#" class="nav-link">What is Happening at ISME</a></li> 
                            <li><a href="#" class="nav-link">Innovation and Entrepreneurship</a></li> 
                             <li><a href="#" class="nav-link">Corporate Connect </a></li> 
                            <li><a href="#" class="nav-link">ISME Impact</a></li> 
                            <li><a href="#" class="nav-link">Contact</a></li> 
                        </div>
                    </ul>
                </nav>
                <div class="menu">
                    <div class="hamburger"></div>
                </div>
           </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
    </div>
</section>

