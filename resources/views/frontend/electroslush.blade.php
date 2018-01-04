@extends('layouts.frontend.app')
@section('page_title','Unidel | Electroslush Pvt. Ltd')
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
					<h2>Electroslush Pvt. Ltd.</h2>
					<p>Electroslush was founded by Kishore Dalal from the ground up to serve the growing Indian automotive and defence markets with sophisticated mechanical engineering components like dies, jigs, fixtures, fabrications etc. Electroslush invested in an advanced mechanical engineering tool room with state of the art equipment like milling machines, lathes, jog boring machines, bandsaws and shearing machines. In 1978 Electroslush was sold to Larsen & Toubro’s N. Ramakrishnan.</p>
				</div>
			</div>
			<div class="col-md-7">
				<div class="left-black-section">
					<p><i class="fa fa-quote-left" aria-hidden="true"></i><br>At a time when Indian manufacturers were heavily reliant on foreign technology, Electroslush achieved the distinction of becoming the number one indigenous tool room in Mumbai in the early 70?s. As a preferred and approved supplier to defence and automotive industries, we supplied press tools, jigs, fixtures, moulds and dies to customers like Vehicle Research & Defence Establishment, IBM, Premier Automobiles amongst many others."</p>
					<p class="left-black-bottom"><strong>Anil B Wani</strong>,<br>Founding Team Member,<br>Electroslush</p>
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
			<li><a href="">Electroslush</a></li>
		</ul>
		<div class="row">
			<div class="col-md-3">
				<img class="img-responsive img-100" src="{{ asset('themes/frontend') }}/images/company/digital_electronics.jpg">
			</div>
			<div class="col-md-9">
				<table class="table table-striped">
					<tr>
						<td><strong>Industry Sector</strong></td>
						<td>Mechanical Tooling</td>
					</tr>						
					<tr>			
						<td><strong>Product Range / Services</strong></td>
						<td>Mechanical tool design & manufacturing</td>
					</tr>
					<tr>
						<td><strong>End User Segment</strong></td>
						<td>Defence & Automotive</td>
					</tr>
					<tr>
						<td><strong>Geographic Focus</strong></td>
						<td>India</td>
					</tr>
					<tr>
						<td><strong>Company Profile at Investment Stage</strong></td>
						<td>Start-up</td>
					</tr>
					<tr>
						<td><strong>Company Profile at Exit Stage</strong></td>
						<td>One of India’s most advanced tool room</td>
					</tr>
					<tr>
						<td><strong>UniDEL Value Add</strong></td>
						<td>Vision, operational set-up, scaling</td>
					</tr>
				</table>			
			</div>
		</div>
	</div>
</section>

@endsection

@section('page_script')


@endsection