@extends('layout')

@section('main_content')
	<header>
		<h1>Task Details</h1>
		<div class="details">
			<ul>
				<li><i class="fa fa-map-marker"></i> Phoenix</li>	
				<li><i class="fa fa-user"></i> {{ Auth::User()->first_name }} </li>	
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
		<button disabled class="disabled">8 Tasks</button>
		<button>add new task</button>
	</div>
	<div class="task-detail">
			<form class="task-form" action="/task/add">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div>
					<label for="task-user">
						User:
					</label>
					<select name="task-user" id="">
					@foreach($userNames as $idx=>$name)
						<option value="{{ $idx + 1 }}">{{ $name }}</option>
					@endforeach
					</select>	
				</div>
				<div>
					<label for="task-type">
						Task:
					</label>	
					<select name="task-type" id="">
						<option value="contact_lead">Contact Lead</option>
						<option value="utility_bill">Utility Bill Review</option>
						<option value="create_quote">Create Quote</option>
						<option value="appointment">Sales Appointment</option>
						<option value="install">Schedule Install</option>
						<option value="green_tag">Schedule Green Tag</option>
						<option value="interconnection">Schedule Interconnection</option>
						<option value="follow_up">Follow Up</option>
					</select>	
				</div>
				<div>
					<label>First Name:</label>
					<input type="text" name="first_name">
				</div>
				<div>
					<label>Last Name:</label>
					<input type="text" name="last_name">	
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
					<label for="duedate">
						Due:
					</label>	
					<input type="date" name="duedate">
				</div>
				<div>
					<label for="status_id">
						Lead Status:
					</label>
					<select name="status_id" id="">
						<option value="1">Lead</option>
						<option value="2">Opportunity</option>
						<option value="3">Sold</option>
						<option value="4">Contact in (30 days)</option>
						<option value="5">Do Not Contact</option>
					</select>
				</div>
				<div>
					<textarea name="task-notes" cols="60" rows="15">Notes Go In Here</textarea>
				</div>
				<div>
					<button>Submit</button>
				</div>
			</form>
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
		<div class="task-buttons">
			<h1>Priority</h1>
			<div>
				<button>Low</button>	
			</div>
			<div>
				<button>Medium</button>	
			</div>
			<div>
				<button>High</button>	
			</div>
			<div>
				<button class="selected">NOW</button>	
			</div>
		</div>
	</div>
@stop
	