@extends('layouts.frontend.app')
@section('page_title','Unidel | SSD Drives India Pvt. Ltd.')
@section('page_css')

@endsection

@section('content')

<div class="inside-header-top"></div>
<section class="company-top-section">
	<div class="container">
		<div class="row">
			<div class="col-md-5 pull-right">
				<div class="company-logo-block">
					<img class="img-responsive center-block" src="{{ asset('themes/frontend') }}/images/ssddrives/SSD_Drives.png">
					<div class="company-arrow">
						<a href=""><img class="img-responsive logo-arrow" src="{{ asset('themes/frontend') }}/images/company/arrow-left.png"></a>
						<a href=""><img class="img-responsive logo-arrow" src="{{ asset('themes/frontend') }}/images/company/arrow-right.png"></a>
					</div>
				</div>
				<div class="company-logo-bottom">
					<h2>SSD Drives India Pvt. Ltd.</h2>
					<p>In 2002 Eurotherm plc UK sold their drives business worldwide. The new global company was re-christened as SSD Drives and the responsibility for the drives business in India was entrusted to UniDEL’s wholly owned company, SSD Drives India Pvt., Ltd. SSD Drives India is a leading provider of factory automation solutions with a number one position in several end user markets. In early 2007, UniDEL sold its shareholding in SSD Drives India to Parker Hannifin Corporation USA.</p>
				</div>
			</div>
			<div class="col-md-7">
				<div class="left-black-section ssd-div">
					<p><i class="fa fa-quote-left" aria-hidden="true"></i><br>The UniDEL Management is exceptionally knowledgeable and well connected with the heartbeat of Indian industry. They have enabled us to grow a business capable of competing on equal terms with the largest international players and have provided us with business opportunities in connected fields which we have subsequently emulated in other markets"</p>
					<p class="left-black-bottom"><strong>Peter Vos</strong>,<br>General Manager,<br>Parker SSD Drives Europe</p>
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
			<li><a href="" class="active">SSD Drives India</a></li>
		</ul>
		<div class="row">
			<div class="col-md-3">
				<img class="img-responsive img-100" src="{{ asset('themes/frontend') }}/images/ssddrives/SSD_Drives_img.jpg">
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