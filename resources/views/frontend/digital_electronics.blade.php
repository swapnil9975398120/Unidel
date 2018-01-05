@extends('layouts.frontend.app')
@section('page_title','Unidel | digital_electronics-')
@section('page_css')

@endsection

@section('content')

<div class="inside-header-top"></div>
<section class="company-top-section">
	<div class="container">
		<div class="row">
			<div class="col-md-5 pull-right">
				<div class="company-logo-block">
					<img class="img-responsive center-block" src="{{ asset('themes/frontend') }}/images/company/digital_electronics_logo.png">
					<div class="company-arrow">
						<a href=""><img class="img-responsive logo-arrow" src="{{ asset('themes/frontend') }}/images/company/arrow-left.png"></a>
						<a href=""><img class="img-responsive logo-arrow" src="{{ asset('themes/frontend') }}/images/company/arrow-right.png"></a>
					</div>
				</div>
				<div class="company-logo-bottom">
					<h2>Digital Electronics Ltd.</h2>
					<p>Founded in 1973, DEL was involved in the design, manufacturing and sale of various industrial electronic products - laboratory & process recorders, weather monitoring instruments, instruments for mission critical applications, plotters, digitisers, scanners, time attendance systems, electronic production equipment. DEL has served as the main platform for the group's various ventures in the automation, engineering and technology sector. In 1998, UniDEL sold some of its product lines and related customer relationships to Eurotherm plc UK.</p>
				</div>
			</div>
			<div class="col-md-7">
				<div class="left-black-section">
					<p><i class="fa fa-quote-left" aria-hidden="true"></i><br>Digital Electronics achieved many firsts to its credit through several pioneering and indigenous R&D/manufacturing efforts. Amongst this, the most notable were the introduction of process & laboratory recording technology and pen plotting technology for the first time in India. This made DEL achieve distinction of the only Indian company to offer such products at affordable prices to over 25,000 satisfied customers across a diverse industrial and geographical base."</p>
					<p class="left-black-bottom"><strong>Vivek Shanbhag</strong>,<br>Founding Team Member,<br>Digital Electronics</p>
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
			<li><a href="" class="active">Digital Electronics</a></li>
		</ul>
		<div class="row">
			<div class="col-md-3">
				<img class="img-responsive img-100" src="{{ asset('themes/frontend') }}/images/company/digital_electronics.jpg">
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