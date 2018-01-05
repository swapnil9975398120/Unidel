@extends('layouts.frontend.app')
@section('page_title','Unidel | Matrikon SoftDEL India Pvt. Ltd.')
@section('page_css')

@endsection

@section('content')

<div class="inside-header-top"></div>
<section class="company-top-section">
	<div class="container">
		<div class="row">
			<div class="col-md-5 pull-right">
				<div class="company-logo-block">
					<img class="img-responsive center-block" src="{{ asset('themes/frontend') }}/images/matrikon/Matrikon-SoftDEL.png">
					<div class="company-arrow">
						<a href=""><img class="img-responsive logo-arrow" src="{{ asset('themes/frontend') }}/images/company/arrow-left.png"></a>
						<a href=""><img class="img-responsive logo-arrow" src="{{ asset('themes/frontend') }}/images/company/arrow-right.png"></a>
					</div>
				</div>
				<div class="company-logo-bottom">
					<h2>Matrikon SoftDEL India Pvt. Ltd.</h2>
					<p>In July 2008, SoftDEL Systems (a UniDEL investee company) formed a joint venture with Matrikon Inc., Canada, a leading global industrial intelligence solutions company. The JV consummated the previous 6 months that SoftDEL and Matrikon had worked closely together in an Offshore Development Center relationship to set up Matrikon’s product development and global consulting services operation in Pune, India. The JV delivered its objectives ahead of time giving Matrikon the confidence to acquire SoftDEL’s majority stake in the venture in November 2009, almost 18 months ahead of schedule.

“I am pleased that this venture has been flawlessly executed right from start-up mode to transfer giving UniDEL and Matrikon outstanding value and return for their investment”, said Sunil Dalal, Managing Director, UniDEL Group.
</p>
				</div>
			</div>
			<div class="col-md-7">
				<div class="left-black-section matrikon-div">
					<p><i class="fa fa-quote-left" aria-hidden="true"></i><br>Matrikon’s Offshore Development Center started out within SoftDEL with a strong and clear vision driven by the leaders of the two companies to build a world class development and services center to serve Matrikon entities worldwide.

The key success for this ODC was in understanding Matrikon’s diverse requirements and building a strong, committed and dedicated core team in a short period of time. This paired with SoftDEL’s world class infrastructure provided Matrikon with a turn-key operation as the ODC transitioned into a joint venture structure.
"</p>
					<p class="left-black-bottom"><strong>Chirag Nanavati</strong>,<br>CEO,<br>SoftDEL Systems</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="company-bottom-section ">
	<div class="container">
		<ul class="page-anchor">
			<li><a href="">Company</a></li>
			<li><a><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
			<li><a href="">Unidel Ventures</a></li>
			<li><a><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
			<li><a href="" class="active">Matrikon SoftDEL India </a></li>
		</ul>
		<div class="row">
			<div class="col-md-3">
				<img class="img-responsive img-100" src="{{ asset('themes/frontend') }}/images/matrikon/Matrikon_SoftDEL_img.jpg">
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