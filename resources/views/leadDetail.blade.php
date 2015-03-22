@extends('layout')

@section('main_content')
	<header>
		<h1>John Legend</h1>
		<div class="details">
			<ul>
				<li><i class="fa fa-map-marker"></i> Phoenix</li>	
				<li><i class="fa fa-user"></i> Charles</li>	
			</ul>
		</div>
	</header>
	<nav class="tabs">
		<a href="">Lead</a>
		<a href="" class="selected">Opportunity</a>
		<a href="">Sold</a>
		<a href="">Contact In</a>
		<a href="">Do Not Contact</a>
	</nav>
	<div>
		<button disabled class="disabled">21 Leads</button>
		<button>add new lead</button>
		<button class="edit">edit lead</button>
		<button class="warning">delete lead</button>
	</div>

	<div class="detail-form">
		<form action="">
			<div>
				<label>Name: 
					<input type="text" name="name">
				</label>
			</div>
			<div>
				<label>Address: 
					<input type="text" name="address">
				</label>
			</div>
			<div>
				<label>Phone: 
					<input type="text" name="phone">
				</label>
			</div>
			<div>
				<label>Email: 
					<input type="text" name="email">
				</label>
			</div>
			<div>
				<label>Credit Score: 
					<input type="text" name="credit_score">
				</label>
			</div>
			<div>
				<label>Appointment: 
					<input type="text" name="appointment">
				</label>
			</div>
			<div>
				<label>Notes: 
					<input type="text" name="notes">
				</label>
			</div>
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
			<p>3/10/15</p>
		</div>
		<div>
			<h1>480 399 3333</h1>
			<p>Phoenix, AZ</p>	
		</div>
		<div>
			<h1>2433</h1>
			<p>sq ft</p>
		</div>
	</div>
	<div class="status-buttons">
		<h1>Lead</h1>
		<p>Current Status</p>
		<div>
			<button>Lead</button>	
		</div>
		<div>
			<button>Opportunity</button>	
		</div>
		<div>
			<button>Sold</button>	
		</div>
		<div>
			<button>Contact in</button>	
		</div>
		<div>
			<button>Do Not Contact</button>	
		</div>
	</div>
@stop
	