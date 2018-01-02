@extends('layouts.frontend.app') @section('page_title','Unidel | Home') @section('page_css') @endsection @section('content')

<section>
    <div class="banner-section">
        <img src="{{ asset('themes/frontend') }}/images/unidel-banner.jpg" class="img-responsive img-100">
    </div>
</section>

<section class="unidel-group-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-5 col-sm-offset-1 col-xs-12">
                <div class="text-wrapper">
                    <h3><span class="title-1">Unidel</span> Group</h3>

                    <p>The UNIDEL Group traces its history to the early 1900s as Rasiklal Maneklal & Company, a leading stock broking and investments firm of its time.</p>
                    <a href="#">Know More</a>
                </div>
            </div>
            <div class="col-sm-6 grp-img col-xs-12">
                <!-- <img src="images/unidel-grp-sm.jpg" class="img-responsive"> -->
            </div>
        </div>
        <div class="container">
            <div class="row compnies-row">
                <div class="col-sm-4">
                    <img class="img-responsive" src="{{ asset('themes/frontend') }}/images/company-logo-1.png" class="img-responsive">
                    <p class="italic-tagline">one view for all wealth.</p>
                    <p><strong>Asset Vantage</strong> is a powerful technology platform built to automate global investment management. AV securely provides a complete view of a family's entire net worth.</p>
                </div>
                <div class="col-sm-4">
                    <img class="img-responsive" src="{{ asset('themes/frontend') }}/images/company-logo-2.png" class="img-responsive">
                    <p class="italic-tagline">Connected brilliantely.</p>
                    <p><strong>SoftDEL</strong>enables automation OEM's engineer smart, connected products which are the backbone of the Industrial Internet of Things.</p>
                </div>
                <div class="col-sm-4">
                    <img class="img-responsive" src="{{ asset('themes/frontend') }}/images/company-logo-3.png" class="img-responsive">
                    <p class="italic-tagline">Tough decisions, fun decision making.</p>
                    <p><strong>ProTeen's</strong> gamified web and mobile platform guides high school and college students through the maze of real world career options and helps them to achieve their future goals by making intelligent academic choices.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="stories-section">
    <div class="container-fluid fluid-container">

        <div class="col-sm-8 bg-black-count">
            <div class="row row-padding">
                <div class="col-sm-3 col-width col-width-margin">
                    <h3>15</h3>
                    <p>Year of
                        <br> Experience</p>
                </div>
                <div class="col-sm-3 col-width">
                    <h3>28</h3>
                    <p>Current
                        <br>Investment</p>
                </div>
                <div class="col-sm-3 col-width">
                    <h3>06</h3>
                    <p>Specialist
                        <br>Industries</p>
                </div>
                <div class="col-sm-3 col-width">
                    <h3>04</h3>
                    <p>Experienced
                        <br>Partners</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4 sucess-story-block">
            <h4>Sucess Stories</h4>
            <div class="stories-slider">
                <div>Asset Vantage is a powerful technology platform built to automate global investment management. AV securely provides a complete view of a familys entire net worth.</div>
                <div>Asset Vantage is a powerful technology platform built to automate global investment management. AV securely provides a complete view of a familys entire net worth.</div>
                <div>Asset Vantage is a powerful technology platform built to automate global investment management. AV securely provides a complete view of a familys entire net worth.</div>

            </div>
        </div>

    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="logo-slider">
                <div>
                    <img src="{{ asset('themes/frontend') }}/images/logo-s-1.jpg" class="img-responsive">
                </div>
                <div>
                    <img src="{{ asset('themes/frontend') }}/images/logo-s-2.jpg" class="img-responsive">
                </div>
                <div>
                    <img src="{{ asset('themes/frontend') }}/images/logo-s-3.jpg" class="img-responsive">
                </div>
                <div>
                    <img src="{{ asset('themes/frontend') }}/images/logo-s-4.jpg" class="img-responsive">
                </div>
                <div>
                    <img src="{{ asset('themes/frontend') }}/images/logo-s-1.jpg" class="img-responsive">
                </div>
                <div>
                    <img src="{{ asset('themes/frontend') }}/images/logo-s-2.jpg" class="img-responsive">
                </div>
                <div>
                    <img src="{{ asset('themes/frontend') }}/images/logo-s-3.jpg" class="img-responsive">
                </div>
                <div>
                    <img src="{{ asset('themes/frontend') }}/images/logo-s-4.jpg" class="img-responsive">
                </div>

            </div>
        </div>
    </div>
</section>

<!-- <section class="team-section">
  <div class="container">
     <h3><span>Te</span>am</h3>
     <div>
  <ul class="nav nav-tabs team-tabs" role="tablist">
    <li role="presentation" class="active">
        <a href="#management" aria-controls="management" role="tab" data-toggle="tab">management</a>
      </li>
    <li role="presentation">
        <a href="#board" aria-controls="board" role="tab" data-toggle="tab">Board</a>
    </li>
</div>
  </div>
</section> -->
<section class="team-section">
    <div class="container">
        <h3><span>Te</span>am</h3>
        <ul class="nav nav-tabs team-tabs" role="tablist">
            <li role="presentation" class="active">
                <a href="#home" aria-controls="home" role="tab" data-toggle="tab">Management</a>
            </li>
            <!-- <li role="presentation">
                <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Board</a>
            </li> -->
            <li>
                <a href="#">Know More</a>
            </li>
        </ul>

        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home">
                <div class="col-sm-11 col-sm-offset-1 col-xs-12">
                    <div class="team-slider">
                        <div class="team-wrapper">
                            <div class="text-wrapper-team">
                                <h4>Sunil K Dalal</h4>
                                <h5>Under & Group Chief Executive Officer  </h5>
                                <h6>UniDEL Group</h6>
                            </div>
                            <div class="text-image-team">
                                <img src="{{ asset('themes/frontend') }}/images/team-1.jpg" class="img-responsive">
                            </div>
							 <div class="know-more-link hidden-xs">
							  
							   <img class="img-responsive" src="{{ asset('themes/frontend') }}/images/about/black-border.jpg">
							</div>
							

                        </div>
                        <div class="team-wrapper second-slide1">
                            <div class="text-wrapper-team second-text-wrap">
                                <h4>Anil Wani</h4>
                                <h5>Under & Group Chief Executive Officer  </h5>
                                <h6>UniDEL Group</h6>
                            </div>
                            <div class="text-image-team">
                                <img src="{{ asset('themes/frontend') }}/images/team-1.jpg" class="img-responsive">
                            </div>							
							 <div class="know-more-link hidden-xs">
							  
							   <img class="img-responsive" src="{{ asset('themes/frontend') }}/images/about/black-border.jpg">
							</div>
							
							

                        </div>
                        <div class="team-wrapper">
                            <div class="text-wrapper-team">
                                <h4>Sunil K Dalal</h4>
                                <h5>Under & Group Chief Executive Officer  </h5>
                                <h6>UniDEL Group</h6>
                            </div>
                            <div class="text-image-team">
                                <img src="{{ asset('themes/frontend') }}/images/team-1.jpg" class="img-responsive">
                            </div>

                            <div class="know-more-link hidden-xs">
                              
                               <img class="img-responsive" src="{{ asset('themes/frontend') }}/images/about/black-border.jpg">
                            </div>

                        </div>
                        <div class="team-wrapper">
                            <div class="text-wrapper-team second-text-wrap">
                                <h4>Sunil K Dalal</h4>
                                <h5>Under & Group Chief Executive Officer  </h5>
                                <h6>UniDEL Group</h6>
                            </div>
                            <div class="text-image-team">
                                <img src="{{ asset('themes/frontend') }}/images/team-1.jpg" class="img-responsive">
                            </div>

                            <div class="know-more-link hidden-xs">
                              
                               <img class="img-responsive" src="{{ asset('themes/frontend') }}/images/about/black-border.jpg">
                            </div>

                        </div>
                        <div class="team-wrapper">
                            <div class="text-wrapper-team">
                                <h4>Sunil K Dalal</h4>
                                <h5>Under & Group Chief Executive Officer  </h5>
                                <h6>UniDEL Group</h6>
                            </div>
                            <div class="text-image-team">
                                <img src="{{ asset('themes/frontend') }}/images/team-1.jpg" class="img-responsive">
                            </div>

                            <div class="know-more-link hidden-xs">
                              
                               <img class="img-responsive" src="{{ asset('themes/frontend') }}/images/about/black-border.jpg">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- <div role="tabpanel" class="tab-pane " id="profile">
                <div class="col-sm-11 col-sm-offset-1 col-xs-12">
                    <h1>Board</h1>
                </div>
            </div> -->
        </div>
    </div>
</section>

@endsection @section('page_script') @endsection