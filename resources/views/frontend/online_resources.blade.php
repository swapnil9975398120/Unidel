@extends('layouts.frontend.app')
@section('page_title','Unidel | Online Resources Corporation')
@section('page_css')

@endsection

@section('content')

<div class="inside-header-top"></div>
<section class="company-top-section">
	<div class="container">
		<div class="row">
			<div class="col-md-5 pull-right">
				<div class="company-logo-block">
					<img class="img-responsive center-block" src="{{ asset('themes/frontend') }}/images/onlineresource/Online_Resources_Corporation.png">
					<div class="company-arrow">
						<a href=""><img class="img-responsive logo-arrow" src="{{ asset('themes/frontend') }}/images/company/arrow-left.png"></a>
						<a href=""><img class="img-responsive logo-arrow" src="{{ asset('themes/frontend') }}/images/company/arrow-right.png"></a>
					</div>
				</div>
				<div class="company-logo-bottom">
					<h2>Online Resources Corporation</h2>
					<p>Online Resources Corporation (ORCC) is a US based provider of web enabled account presentation, payment and marketing services for financial institutions, creditors and billers. ORCC uses its proprietary software and hardware technology platform to deliver a number of services such as bill payment & transaction processing, online banking & account presentation to its customers.<br><br>
                     UniDEL has engaged with ORCC to help build a fully owned Offshore Engineering & Development Center in Bangalore. This entailed providing end to end services that included overall business & financial model, location & property search, management team recruitment, company registration & legal set up and Asia business strategy. 
                    </p>
				</div>
			</div>
			<div class="col-md-7">
				<div class="left-black-section online-div">
					<p><i class="fa fa-quote-left" aria-hidden="true"></i><br>Putting together an offshore operation is very complex. It is especially complex when putting together a captive center as ORCC intends to do. To minimize the risk and accelerate the early stages, it is essential that you work with a partner that has both the experience of building an offshore site as well as the flexibility to work with you during the early stages of your own site. Unidel was the perfect partner to help us through the early stages"</p>
					<p class="left-black-bottom"><strong>Jeff Kissling</strong>,<br>CTO,<br>Online Resources Corp,USA</p>
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
			<li><a href="" class="active">Online Resources Corporation</a></li>
		</ul>
		<div class="row">
			<div class="col-md-3">
				<img class="img-responsive img-100" src="{{ asset('themes/frontend') }}/images/onlineresource/Online_Resources_Corporation_img.jpg">
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