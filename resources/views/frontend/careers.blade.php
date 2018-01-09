@extends('layouts.frontend.app')
@section('page_title','Unidel | Careers')
@section('page_css')
@endsection
@section('content')


<section class="about-banner-section">
<img class="img-responsive" src="{{ asset('themes/frontend') }}/images/career/career-banner.jpg">
        <div class="container">
          <div class="about-caption">
              <div class="about-txt team-txt">
                <h1><span>Careers</span></h1>
                <!-- <h2>unidel</h2> -->
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa</p>
                <img class="img-responsive" src="{{ asset('themes/frontend') }}/images/about/black-border.jpg">
              </div>  
          </div>
        </div>  
</section>

<section class="unidel-group">
  <div class="container">
      <div class="row">
        <div class="col-md-7 col-sm-7 ">
            <div class="great-idea greate-idea-team great-idea-careers">
                <h2>Great Idea is not</h2>
                <h3>Enough</h3>
                <p>Rosabeth Moss Kanter</p>
                <img class="img-responsive" src="{{ asset('themes/frontend') }}/images/about/white-border.jpg">
            </div>
        </div>
        <div class="col-md-5 col-sm-5 ">
          <div class="unidel-txt">
            <h2><span>Life </span> At unidel</h2>
            <p class="bold-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa</p>

            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa</p>

            <!-- <p>
              Through its Family Investment Office, the UNIDEL Group also invests in traditional asset classes including public equities, fixed income and real estate.
            </p> -->

          </div>  
        </div>
      </div>
  </div>
</section>

<section class="openings-parent">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-3 ">
        <div class="openings-inner-wrap">
          <h3>management</h3>
          <p>{{ $data ->management}}</p>
          <div class="position-wrap">
            <p>5 positions</p>
            <img class="img-responsive" src="{{ asset('themes/frontend') }}/images/about/black-border.jpg">
          </div>
        </div>
      </div>
      <div class="col-md-3  col-sm-3 col-sm-offset-1 col-md-offset-1">
        <div class="openings-inner-wrap">
          <h3>engineering</h3>
          <p>{{ $data ->engineering}} </p>
          <div class="position-wrap">
            <p>5 positions</p>
            <img class="img-responsive" src="{{ asset('themes/frontend') }}/images/about/black-border.jpg">
          </div>
        </div>
      </div>
      <div class="col-md-3  col-sm-3 col-sm-offset-1 col-md-offset-1">
        <div class="openings-inner-wrap">
          <h3>sales</h3>
          <p>{{ $data ->sales}}</p>
          <div class="position-wrap">
            <p>5 positions</p>
            <img class="img-responsive" src="{{ asset('themes/frontend') }}/images/about/black-border.jpg">
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-3 ">
        <div class="openings-inner-wrap">
          <h3>software</h3>
          <p>{{ $data ->software}}</p>
          <div class="position-wrap">
            <p>5 positions</p>
            <img class="img-responsive" src="{{ asset('themes/frontend') }}/images/about/black-border.jpg">
          </div>
        </div>
      </div>
      <div class="col-md-3  col-sm-3 col-sm-offset-1 col-md-offset-1">
        <div class="openings-inner-wrap">
          <h3>tester</h3>
          <p>{{ $data ->tester}}</p>
          <div class="position-wrap">
            <p>5 positions</p>
            <img class="img-responsive" src="{{ asset('themes/frontend') }}/images/about/black-border.jpg">
          </div>
        </div>
      </div>
      <div class="col-md-3  col-sm-3 col-sm-offset-1 col-md-offset-1">
        <div class="openings-inner-wrap">
          <h3>designer</h3>
          <p>{{ $data ->designer}} </p>
          <div class="position-wrap">
            <p>5 positions</p>
            <img class="img-responsive" src="{{ asset('themes/frontend') }}/images/about/black-border.jpg">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection
@section('page_script')
@endsection