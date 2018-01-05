@extends('layouts.frontend.app')
@section('page_title','Unidel | Parker Hannifin Corporation')
@section('page_css')

@endsection

@section('content')

<div class="inside-header-top"></div>
<section class="company-top-section">
	<div class="container">
		<div class="row">
			<div class="col-md-5 pull-right">
				<div class="company-logo-block">
					<img class="img-responsive center-block" src="{{ asset('themes/frontend') }}/images/parker/Parker_Hannifin.png">
					<div class="company-arrow">
						<a href=""><img class="img-responsive logo-arrow" src="{{ asset('themes/frontend') }}/images/company/arrow-left.png"></a>
						<a href=""><img class="img-responsive logo-arrow" src="{{ asset('themes/frontend') }}/images/company/arrow-right.png"></a>
					</div>
				</div>
				<div class="company-logo-bottom">
					<h2>Parker Hannifin Corporation</h2>
					<p><strong>With annual sales exceeding $10 billion, Parker Hannifin is the world’s leading diversified manufacturer of motion and control technologies and systems, providing precision-engineered solutions for a wide variety of commercial, mobile, industrial and aerospace markets.
                    Post the acquisition of SSD Drives India Pvt Ltd from UniDEL, Parker has engaged UniDEL to assist it with the strategic growth initiatives of its Indian business including the launch of a range of new products.
                    </strong></p>
				</div>
			</div>
			<div class="col-md-7">
				<div class="left-black-section">
					<p><i class="fa fa-quote-left" aria-hidden="true"></i><br>We have had an excellent first year working with the highly skilled team at SSD Drives India, and the business has integrated well into our international sales structure, retaining all the senior staff from before the acquisition. Our staff in India have installed our standard operating software packages and integrated the management into the Parker Asia-Pacific management structure. The team have started selling a wider range of Parker products using the high level of technical expertise in the business, and the customers have reacted well to these initiatives yielding first year growth comfortably exceeding our expectations.
"</p>
					<p class="left-black-bottom"><strong>Roger Sherrard</strong>,<br>Group President,<br>Parker Automation Group</p>
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
			<li><a href="" class="active">Parker Hannifin Corporation</a></li>
		</ul>
		<div class="row">
			<div class="col-md-3">
				<img class="img-responsive img-100" src="{{ asset('themes/frontend') }}/images/parker/Parker_Hannifin_img.jpg">
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