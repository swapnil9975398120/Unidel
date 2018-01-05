@extends('layouts.frontend.app')
@section('page_title','Unidel | LumaSense Technologies Inc')
@section('page_css')

@endsection

@section('content')

<div class="inside-header-top"></div>
<section class="company-top-section">
	<div class="container">
		<div class="row">
			<div class="col-md-5 pull-right">
				<div class="company-logo-block">
					<img class="img-responsive center-block" src="{{ asset('themes/frontend') }}/images/lumasense/LumaSense_Technologies.png">
					<div class="company-arrow">
						<a href=""><img class="img-responsive logo-arrow" src="{{ asset('themes/frontend') }}/images/company/arrow-left.png"></a>
						<a href=""><img class="img-responsive logo-arrow" src="{{ asset('themes/frontend') }}/images/company/arrow-right.png"></a>
					</div>
				</div>
				<div class="company-logo-bottom">
					<h2>LumaSense Technologies Inc</h2>
					<p>LumaSense is a fast growing sensing instrumentation company focused on providing differentiated solutions to customers in the energy, medical equipment, industrial and semi-conductor markets. LumaSense is headquartered in California USA with sales and design offices around the world.
                      UniDEL set-up the Indian operation of Lumasense on a Build-Operate-Transfer model. The operation comprises a business development and application support unit for Indian customers and a back office for the US HQ.
                     The back office works as an information engine for the global marketing, sales and R&D teams at Lumasense HQ. They carry out research on technologies, end uses in defined verticals and customer segments. The back office then collates and reports the information to the HQ. The HQ 
                     departments utilize this information to formulate their strategies.
                      </p>
				</div>
			</div>
			<div class="col-md-7">
				<div class="left-black-section lumasense-div">

                    <p><i class="fa fa-quote-left" aria-hidden="true"></i><br>
                    We are fortunate to have a solid and experienced team on the ground in Mumbai.
                    They are provided guidance and leadership by UniDEL in focusing their efforts
                     on the high impact opportunities."</p>
					<p class="left-black-bottom"><strong>Vivek Joshi</strong>,<br>CEO,,<br>Lumasense Inc. USA</p>
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
			<li><a href="" class="active">LumaSense Technologies</a></li>
		</ul>
		<div class="row">
			<div class="col-md-3">
				<img class="img-responsive img-100" src="{{ asset('themes/frontend') }}/images/lumasense/LumaSense_Technologies_img.jpg">
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