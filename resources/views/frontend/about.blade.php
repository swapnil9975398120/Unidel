@extends('layouts.frontend.app')
@section('page_title','Unidel | About')
@section('page_css')
@endsection
@section('content')


<section class="about-banner-section">
  <img class="img-responsive img-100" src="{{ asset('themes/frontend') }}/images/about/about-banner.jpg">
        <div class="container">
          <div class="about-caption">
              <div class="about-txt">
                <h1>About</h1>
                <h2>unidel</h2>
                <p>UNIDEL is an entrepreneurial group with a focus on technology venturing and multi asset class investing.</p>
                <img class="img-responsive" src="{{ asset('themes/frontend') }}/images/about/black-border.jpg">
              </div>  
          </div>
        </div>  
</section>

<section class="unidel-group">
  <div class="container">
      <div class="row">
        <div class="col-md-7 col-sm-7 ">
            <div class="great-idea">
                <h2>Great idea is not<br> enough</h2>
                <p>Rosabeth Moss Kanter</p>
                <img class="img-responsive" src="{{ asset('themes/frontend') }}/images/about/white-border.jpg">
            </div>
        </div>
        <div class="col-md-5 col-sm-5 ">
          <div class="unidel-txt">
            <h2><span>Unidel</span> Group</h2>
            <p class="bold-text">The UNIDEL Group traces its history to the early 1900s as Rasiklal Maneklal & Company, a leading stock broking and investments firm of its time.</p>

            <p>In 1973, the group established a presence in the engineering and technology business. Since 2007 and after exiting a number of operating companies in the industrial controls space, UNIDEL has morphed into an early stage venture incubator, building new age technology ideas into flourishing businesses through strategic investment and deep operational know how.</p>

            <p>
              Through its Family Investment Office, the UNIDEL Group also invests in traditional asset classes including public equities, fixed income and real estate.
            </p>
          </div>  
        </div>
      </div>
  </div>
</section>

<section class="venture-capital">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-12 know-more-parent">
        <div class="know-more-txt">
          <h2>Unidel ventures</h2>
          <p>UNIDEL's disruptive ventures across the industrial, financial and educational segments are designed to re-imagine solutions for current industry challenges.</p>
        </div>
        <div class="know-more-link">
          <p><a href="#">Know More</a></p>
           <img class="img-responsive" src="{{ asset('themes/frontend') }}/images/about/black-border.jpg">
        </div>
        <div class="know-more-img">
          <img class="img-responsive" src="{{ asset('themes/frontend') }}/images/about/venture.jpg">
        </div>  
      </div>

      <div class="col-md-6 col-sm-6 col-xs-12 know-more-parent">
        <div class="know-more-txt">
          <h2>rm  capital</h2>
          <p>Rasiklal Maneklal Capital is the UNIDEL Group's Family Investment Office providing investment management, asset allocation and a comprehensive set of back-office and middle-office services.</p>
        </div>
        <div class="know-more-link">
          <p><a href="#">Know More</a></p>
           <img class="img-responsive" src="{{ asset('themes/frontend') }}/images/about/black-border.jpg">
        </div>
        <div class="know-more-img">
          <img class="img-responsive" src="{{ asset('themes/frontend') }}/images/about/capital.jpg">
        </div>  
      </div>
    </div>
  </div>
</section>


@endsection
@section('page_script')
@endsection