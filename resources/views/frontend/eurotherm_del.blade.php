@extends('layouts.frontend.app')
@section('page_title','Unidel | Eurotherm DEL India Ltd.')
@section('page_css')

@endsection

@section('content')

<div class="inside-header-top"></div>
<section class="company-top-section">
	<div class="container">
		<div class="row">
			<div class="col-md-5 pull-right">
				<div class="company-logo-block">
					<img class="img-responsive center-block" src="{{ asset('themes/frontend') }}/images/eurotherm/Eurotherm.png">
					<div class="company-arrow">
						<a href=""><img class="img-responsive logo-arrow" src="{{ asset('themes/frontend') }}/images/company/arrow-left.png"></a>
						<a href=""><img class="img-responsive logo-arrow" src="{{ asset('themes/frontend') }}/images/company/arrow-right.png"></a>
					</div>
				</div>
				<div class="company-logo-bottom">
					<h2>Eurotherm DEL India Ltd.</h2>
					<p>In 1993 UniDEL expanded with the formation of a technology transfer agreement with Eurotherm plc UK. In 1996, UniDEL simultaneously acquired Turnbull Controls Chennai and formed a 50:50 joint venture company in partnership with Eurotherm plc UK (since a part of Invensys plc). An integrated company, Eurotherm DEL India Ltd was created to manufacture and market a range of process and automation solutions. Eurotherm DEL has since become a national leader in the process control business with a number one position in several end user markets. In late 2006, UniDEL sold its shareholding in Eurotherm DEL to Invensys plc UK.</p>
				</div>
			</div>
			<div class="col-md-7">
				<div class="left-black-section">
					<p><i class="fa fa-quote-left" aria-hidden="true"></i><br>When Eurotherm entered the Indian market in 1996, it was a well-known brand in Europe but was selectively known to Indian industry who were using Eurotherm products which came pre-fitted along with capital equipment imported from Europe. The UniDEL group was the right picked by Eurotherm to form a joint venture; it was the able management of UniDEL which gave Eurotherm its Indian market penetration covering a wide spectrum of industries through its established regional offices and network of professionals. UniDEL also provided the marketing platform to Eurotherm and uplifted its image in the Indian market to bring it at par with other known global automation brands.
Through his vision, laser sharp focus and commitment to grow the Eurotherm business in India, Sunil Dalal, the Managing Director of UniDEL group formed a team of professionals and prepared them to build a sustainable, profitable and growth oriented business model. The business grew manifold in ten years. Thanks to UniDEL for bringing the business to its current, mature and autopilot state.
"</p>
					<p class="left-black-bottom"><strong>Kalpesh Desai</strong>,<br>Sales Director,<br>Invensys India</p>
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
			<li><a href="" class="active">Eurotherm DEL India</a></li>
		</ul>
		<div class="row">
			<div class="col-md-3">
				<img class="img-responsive img-100" src="{{ asset('themes/frontend') }}/images/eurotherm/Eurotherm_img.jpg">
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