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
	<nav class="tabs" id="leadDetail-tabs">
		<a class="status lead {{ $leadDetail->status_id == "1" ? 'selected' : ''}}" href="#" >Lead</a>
		<a class="status opportunity {{ $leadDetail->status_id == "2" ? 'selected' : ''}}" href="#" >Opportunity</a>
		<a class="status sold {{ $leadDetail->status_id == "3" ? 'selected' : ''}}" href="#" >Sold</a>
		<a class="status contact-in {{ $leadDetail->status_id == "4" ? 'selected' : ''}}" href="#" >Contact In</a>
		<a class="status dnc {{ $leadDetail->status_id == "5" ? 'selected' : ''}}" href="#" >Do Not Contact</a>
	</nav>
	<div class="info">
		<a href="#" class="created">3/1/2015</a>
		<a href="/lead/delete/{{ $leadDetail->lead_id }}" class="delete-lead">delete lead</a>
	</div>

	<div class="detail-form">
		<form action="/leadDetail/{{ $leadDetail->lead_id }}" method="POST">
			<input class="token" type="hidden" name="_token" value="{{csrf_token()}}">
			<input type="hidden" name="lead-id" value="{{ $leadDetail->lead_id }}">
			
			<div>
				<label>First Name:</label>
				<input type="text" name="first_name" value="{{ $leadDetail->first_name }}">
			</div>
			<div>
				<label>Last Name:</label>
				<input type="text" name="last_name" value="{{ $leadDetail->last_name }}">
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
				<input type="text" name="appointment" value="{{ $date }}">
			</div>
			<div>
				<label>Notes:</label> 
				<input type="text" name="notes" value="{{ $leadDetail->notes }}">
			</div>
			<div>
				<label>Lead Type:</label>
				<select name="type" id="">
					<option {{ $leadDetail->type == "door" ? 'selected' : ''}} value="door">Doorknock</option>
					<option {{ $leadDetail->type == "call" ? 'selected' : ''}} value="call">Call</option>
					<option {{ $leadDetail->type == "web" ? 'selected' : ''}} value="web">Web</option>
					<option {{ $leadDetail->type == "referral" ? 'selected' : ''}} value="referral">Referral</option>
				</select>
			</div>
			<button>Submit</button>
		</form>
	</div>
@stop
@section('aside_content')
	<div class="statistics">
		<div class="statistics">
			<div>
				<h1>{{ $leadDetail->first_name . ' ' . $leadDetail->last_name}}</h1>
				<p></p>
			</div>
			<div>
				<p>Phoenix, AZ</p>	
			</div>
			<div>
				<h1>{{ $leadDetail->type }}</h1>
				<p>lead type</p>
			</div>
			<div>
				<h1>{{ $leadDetail->phone }}</h1>
				<p>contact</p>
			</div>
		</div>
		<div class="status-buttons">
			<h1>Status</h1>
			<div>
				<button class="status lead {{ $leadDetail->status_id == "1" ? 'selected' : ''}}">Lead</button>	
			</div>
			<div>
				<button class="status opportunity {{ $leadDetail->status_id == "2" ? 'selected' : ''}}">Opportunity</button>
			</div>
			<div>
				<button class="status sold {{ $leadDetail->status_id == "3" ? 'selected' : ''}}">Sold</button>	
			</div>
			<div>
				<button class="status contact-in {{ $leadDetail->status_id == "4" ? 'selected' : ''}}">Contact in</button>	
			</div>
			<div>
				<button class="dnc {{ $leadDetail->status_id == "5" ? 'selected' : ''}}">Do Not Contact</button>	
			</div>
		</div>
	</div>
@stop
	