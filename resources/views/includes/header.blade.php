<!doctypt html>
<html>
   <head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page_title')</title>
    <link rel="shortcut icon" href="{{ asset('themes/frontend') }}/images/Unidel_FAVICON.png">
      <link rel="stylesheet" href="{{ asset('themes/frontend') }}/css/bootstrap.css">
      <link rel="stylesheet" href="{{ asset('themes/frontend') }}/css/custom.css">
      <link rel="stylesheet" href="{{ asset('themes/frontend') }}/css/custom-rupali.css">
      <link rel="stylesheet" href="{{ asset('themes/frontend') }}/css/about.css">
      <link rel="stylesheet" href="{{ asset('themes/frontend') }}/css/company.css">
      <link rel="stylesheet" href="{{ asset('themes/frontend') }}/css/lumasense.css">
      
      <link rel="stylesheet" href="{{ asset('themes/frontend') }}/css/matrikon.css">
      <link rel="stylesheet" href="{{ asset('themes/frontend') }}/css/ssd.css">

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="{{ asset('themes/frontend') }}/css/slick.css">
      <link rel="stylesheet" href="{{ asset('themes/frontend') }}/css/slick-theme.css">
      
      
        @yield('page_css')
   </head> 
   <section class="navigation-section">
  <div class="container">
    <!-- <div class="row">
      <ul class="list-inline social-icon-row pull-right">
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        <li>
          <div class="inner-addon right-addon">
            <i class="glyphicon glyphicon-search"></i>
            <input type="text" class="form-control" placeholder="Search " />
          </div>
        </li>
      </ul>
    </div> -->
    <nav class="navbar navbar-default cust-navbar">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{( '/' )}}">
          <img src="{{ asset('themes/frontend') }}/images/unidel-logo.png" class="img-responsive">
          </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="">
            <a href="{{url('/about')}}">About Us <span class="sr-only">(current)</span></a></li>
            <!-- <li><a href="../navbar-static-top/">Company </a></li> -->
            <li class="dropdown cust-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Company
              <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">UNIDEL Ventures</a></li>
                <li class="divider"></li>
                <li><a href="#">RM Capital</a></li>
                <li class="divider visible-xs"></li>
              </ul>
            </li>
            <li><a href="#">Team</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</section>








  

