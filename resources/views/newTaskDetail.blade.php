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
		<form class="task-form" action="/task/add" method="post">
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
@stop
@section('aside_content')
	<iframe class="calendar" src="https://www.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;showTz=0&amp;height=350&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=justinleon111%40gmail.com&amp;color=%232952A3&amp;ctz=America%2FPhoenix" style=" border-width:0 " width="350" height="350" frameborder="0" scrolling="no"></iframe>

	<iframe class="calendar" src="https://www.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;showTz=0&amp;mode=AGENDA&amp;height=350&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=justinleon111%40gmail.com&amp;color=%232952A3&amp;ctz=America%2FPhoenix" style=" border-width:0 " width="350" height="350" frameborder="0" scrolling="no"></iframe>
@stop
	