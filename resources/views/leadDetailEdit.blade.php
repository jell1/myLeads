@extends('layout')

@section('main_content')
	<header>
		<h1>Lead Details</h1>
		<div class="details">
			<ul>
				<li><i class="fa fa-map-marker"></i> Phoenix</li>	
				<li><i class="fa fa-user"></i> Charles</li>	
			</ul>
		</div>
	</header>
	<nav class="tabs">
		<a class="status lead" href="#">Lead</a>
		<a class="status opportunity" href="#" class="selected">Opportunity</a>
		<a class="status sold" href="#">Sold</a>
		<a class="status contact-in" href="#">Contact In</a>
		<a class="status dnc" href="#">Do Not Contact</a>
	</nav>
	<div>
		<button disabled class="disabled">21 Leads</button>
		<button>add new lead</button>
		<button class="edit">edit lead</button>
		<button class="warning">delete lead</button>
	</div>

	<div class="detail-form">
		<form action="/lead/add" method="POST">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			
			<div>
				<label>Name:</label>
				<input type="text" name="name" value="{{ $leadDetail->first_name . ' ' . $leadDetail->last_name}}">
			</div>
			<div>
				<label>Address:</label> 
				<input type="text" name="address" value="{{ $leadDetail->address }}">
			</div>
			<div>
				<label>Phone:</label> 
				<input type="text" name="phone" value="{{ $leadDetail->phone }}">
			</div>
			<div>
				<label>Email:</label> 
				<input type="text" name="email" value="{{ $leadDetail->email }}">
			</div>
			<div>
				<label>Credit Score:</label>
				<input type="text" name="credit_score" value="{{ $leadDetail->credit_score }}">	
			</div>
			<div>
				<label>Appointment:</label> 
				<input type="text" name="appointment" value="{{ $leadDetail->appointment }}">
			</div>
			<div>
				<label>Notes:</label> 
				<input type="text" name="notes" value="{{ $leadDetail->notes }}">
			</div>
			<div>
				<label>Lead Type</label>
			{{-- 	@if({{ $leadDetail->type == door}}) {

				} --}}
				<select name="type" id="">
					<option {{ $leadDetail->type == "door" ? 'selected' : ''}} value="door">Doorknock</option>
					<option {{ $leadDetail->type == "call" ? 'selected' : ''}} value="call">Call</option>
					<option {{ $leadDetail->type == "web" ? 'selected' : ''}} value="web">Web</option>
					<option {{ $leadDetail->type == "referral" ? 'selected' : ''}} value="referral">Referral</option>
				</select>
			</div>
			<button>Submit</button>
		</form>
		<div class="detail-comments">
			Comment Section
		</div>
	</div>
@stop
@section('aside_content')
	<div class="statistics">
		<div>
			<h1>John Legend</h1>
			<p></p>
		</div>
		<div>
			<p>Phoenix, AZ</p>	
		</div>
		<div>
			<h1>2433</h1>
			<p>sq ft</p>
		</div>
		<div>
			<h1>480 343 3344</h1>
			<p>contact</p>
		</div>
	</div>
	<div class="status-buttons">
		<h1>Lead</h1>
		<div>
			<button class="selected status lead">Lead</button>	
		</div>
		<div>
			<button class="status opportunity">Opportunity</button>	
		</div>
		<div>
			<button class="status sold">Sold</button>	
		</div>
		<div>
			<button class="status contact-in">Contact in</button>	
		</div>
		<div>
			<button class="dnc">Do Not Contact</button>	
		</div>
	</div>
@stop
	