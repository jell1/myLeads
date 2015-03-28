@extends('layout')

@section('main_content')
	<header>
		<h1>Lead Details</h1>
		<div class="details">
			<ul>
				<li><i class="fa fa-map-marker"></i> Phoenix</li>	
				<li><i class="fa fa-user"></i> {{ Auth::User()->first_name }}</li>	
			</ul>
		</div>
	</header>
	<nav class="tabs">
		<a class="status lead selected" href="#">Lead</a>
		<a class="status opportunity" href="#" class="selected">Opportunity</a>
		<a class="status sold" href="#">Sold</a>
		<a class="status contact-in" href="#">Contact In</a>
		<a class="status dnc" href="#">Do Not Contact</a>
	</nav>
	<div>
		<button disabled class="disabled">Created: 4/4/15</button>
		<button>add lead</button>
	</div>

	<div class="detail-form">
		<form action="/lead/add" method="POST">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			
			<div>
				<label>First Name:</label>
				<input type="text" name="first_name">
			</div>
			<div>
				<label>Last Name:</label>
				<input type="text" name="last_name">	
			</div>
			<div>
				<label>Address:</label> 
				<input type="text" name="address">
			</div>
			<div>
				<label>Phone:</label> 
				<input type="text" name="phone">
			</div>
			<div>
				<label>Email:</label> 
				<input type="text" name="email">
			</div>
			<div>
				<label>Credit Score:</label>
				<input type="text" name="credit_score">	
			</div>
			<div>
				<label>Appointment:</label> 
				<input type="text" name="appointment">
			</div>
			<div>
				<label>Notes:</label> 
				<input type="text" name="notes">
			</div>
			<div>
				<label>Lead Type:</label>
				<select name="type" id="">
					<option value="door">Doorknock</option>
					<option value="call">Phone</option>
					<option value="web">Website</option>
					<option value="referral">Referral</option>
				</select>
			</div>
			<button>Submit</button>
		</form>
	</div>
@stop
@section('aside_content')
	<div class="statistics new-lead">
		
	</div>
	<div class="status-buttons new-lead">
		<h1>Status</h1>
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
	