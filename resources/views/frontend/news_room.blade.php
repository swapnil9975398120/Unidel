@extends('layouts.frontend.app')
@section('page_title','Unidel | News Room')
@section('page_css')
@endsection
@section('content')


<section class="about-banner-section">
  <img class="img-responsive img-100" src="{{ asset('themes/frontend') }}/images/newsroom/bannerimg.jpg">
        <div class="container">
          <div class="about-caption">
              <div class="about-txt">
                <h1>NEWS</h1>
                <h2>ROOM</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
                <img class="img-responsive" src="{{ asset('themes/frontend') }}/images/about/black-border.jpg">
              </div>  
          </div>
        </div>  
</section>

<section class="unidel-group newsroom">
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
            <h2><span>LATEST</span></h2>

            <div class="know-more-txt">
                <h3>Unidel Invests in Indian Businesses</h3>
                <p><strong>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</strong></p>
                <p>Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>   
            </div>
            
            <div class="know-more-img newsroom-taj">
              <img class="img-responsive" src="{{ asset('themes/frontend') }}/images/newsroom/taj.jpg">
            </div>  
         </div>
         
          </div>  
        </div>
      </div>
  </div>
</section>

<section class="team-section news-sec">
  <div class="container">
  
                <div class="col-sm-11 col-sm-offset-0 col-xs-12">
                    <div class="news-slider">
                        <div class="team-wrapper newsp">
                            <div class="text-wrapper-team">
                                <h4>Unidel Launches Proteen</h4>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                            </div>
                            <div class="text-image-team">
                                <img src="{{ asset('themes/frontend') }}/images/newsroom/newsroom22.jpg" class="img-responsive">
                            </div>
							 <div class="know-more-link hidden-xs">
                             <p>5December 16</p>
							   <img class="img-responsive" src="{{ asset('themes/frontend') }}/images/about/black-border.jpg">
							</div>
							

                        </div>
                        <div class="team-wrapper newsp second-slide1">
                            <div class="text-wrapper-team second-text-wrap">
                                <h4>Unidel Inagurates Newyork office</h4>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>

                            </div>
                            <div class="text-image-team">
                                <img src="{{ asset('themes/frontend') }}/images/newsroom/newsroom3.jpg" class="img-responsive">
                            </div>							
							 <div class="know-more-link hidden-xs">
                                 <p>16June 15</p>
							   <img class="img-responsive" src="{{ asset('themes/frontend') }}/images/about/black-border.jpg">
							</div>
														
                        </div>
                         
                        <div class="team-wrapper newsp second-slide1">
                            <div class="text-wrapper-team second-text-wrap">
                                <h4>Unidel Inagurates Newyork office</h4>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>

                            </div>
                            <div class="text-image-team">
                                <img src="{{ asset('themes/frontend') }}/images/newsroom/newsroom3.jpg" class="img-responsive">
                            </div>							
							 <div class="know-more-link hidden-xs">
                                 <p>16June 15</p>
							   <img class="img-responsive" src="{{ asset('themes/frontend') }}/images/about/black-border.jpg">
							</div>
														
                        </div>
                      
                        
                        
                    </div>
                </div>
           
            <!-- <div role="tabpanel" class="tab-pane " id="profile">
                <div class="col-sm-11 col-sm-offset-1 col-xs-12">
                    <h1>Board</h1>
                </div>
            </div> -->
        
     

      <!-- <div class="col-md-6 col-sm-6 col-xs-12 know-more-parent">
        <div class="know-more-txt">
          <h2>Unidel Inagurates Newyork office</h2>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. </p>
        </div>
        <div class="know-more-link">
          <p><a href="#">16June 15</a></p>
           <img class="img-responsive" src="{{ asset('themes/frontend') }}/images/about/black-border.jpg">
        </div>
        <div class="know-more-img">
          <img class="img-responsive" src="{{ asset('themes/frontend') }}/images/newsroom/newsroom3.jpg">
        </div>  
      </div> -->
    
  </div>
</section>


@endsection
@section('page_script')
@endsection