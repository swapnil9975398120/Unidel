@extends('layouts.frontend.app')
@section('page_title','Unidel | Land DEL Infrared Pvt. Ltd.')
@section('page_css')

@endsection

@section('content')

<div class="inside-header-top"></div>
<section class="company-top-section">
	<div class="container">
		<div class="row">
			<div class="col-md-5 pull-right">
				<div class="company-logo-block">
					<img class="img-responsive center-block" src="{{ asset('themes/frontend') }}/images/land/Land.png">
					<div class="company-arrow">
						<a href=""><img class="img-responsive logo-arrow" src="{{ asset('themes/frontend') }}/images/company/arrow-left.png"></a>
						<a href=""><img class="img-responsive logo-arrow" src="{{ asset('themes/frontend') }}/images/company/arrow-right.png"></a>
					</div>
				</div>
				<div class="company-logo-bottom">
					<h2>Land DEL Infrared Pvt. Ltd.</h2>
					<p><strong>In 2005, UniDEL converted its decade long relation with Land Instruments International UK into a 50:50 joint venture company to focus on deeper penetration within the Indian Steel, Glass, Cement and Power industries.</strong><br> Another objective of the JV was to develop complimentary technology for global sale through the Land network. In mid 2006, post the acquisition of Land UK by Ametek Corporation USA, the partners decided to restructure the JV operations resulting in the acquisition of Land’s 50% shareholding by UniDEL.</p>
				</div>
			</div>
			<div class="col-md-7">
				<div class="left-black-section land-div">
					<p><i class="fa fa-quote-left" aria-hidden="true"></i><br>Our partnership with UniDEL over the years has been both productive and rewarding. Post restructuring, we confidently expect this to continue to our mutual benefit.
"</p>
					<p class="left-black-bottom"><strong>Allan Imrie</strong>,<br>Vice President,<br>Ametek Corporation</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="company-bottom-section">
	<div class="container">
		<ul class="page-anchor">
			<li><a href="">Company</a></li>
			<li><a><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
			<li><a href="">Unidel Ventures</a></li>
			<li><a><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
			<li><a href="" class="active">Land</a></li>
		</ul>
		<div class="row">
			<div class="col-md-3">
				<img class="img-responsive img-100" src="{{ asset('themes/frontend') }}/images/land/Land_img.jpg">
			</div>
			<div class="col-md-9">
			<table class="table table-striped">
			<tr>			
				<td><strong>Industry Sector</strong></td>
				<td>{{ $data->industry_sector }}</td>
			</tr>
					<tr>			
						<td><strong>Product Range / Services</strong></td>
						<td>{{ $data->product_range }}</td>
					</tr>
					<tr>
						<td><strong>End User Segment</strong></td>
						<td>{{ $data->end_user_segment }}</td>
					</tr>
					<tr>
						<td><strong>Geographic Focus</strong></td>
						<td>{{ $data->geographic_focus }}</td>
					</tr>
					<tr>
						<td><strong>Company Profile at Investment Stage</strong></td>
						<td>{{ $data->company_profile_at_investment_stage }}</td>
					</tr>
					<tr>
						<td><strong>Company Profile at Exit Stage</strong></td>
						<td>{{ $data->company_profile_at_exit_stage }}</td>
					</tr>
					<tr>
						<td><strong>UniDEL Value Add</strong></td>
						<td>{{ $data->unidel_value_add }}</td>
					</tr>
					
				</table>			
			</div>
		</div>
	</div>
</section>




@endsection

@section('page_script')


@endsection