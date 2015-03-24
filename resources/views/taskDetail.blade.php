@extends('layout')

@section('main_content')
	<header>
		<h1>Task Details</h1>
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
		<button disabled class="disabled">8 Tasks</button>
		<button>add new task</button>
		<button class="edit">edit task</button>
		<button class="warning">delete task</button>
	</div>

	<div class="task-detail">
			<form class="task-form" action="">
				<div>
					<label for="task-user">
						User:
						<select name="task-user" id="">
							<option value="user1">User1</option>
							<option value="user2">User2</option>
						</select>
					</label>		
				</div>
				<div>
					<label for="task-type">
						Task:
						<select name="task-type" id="">
							<option value="contact_lead">Contact Lead</option>
							<option value="follow_up">Follow Up</option>
							<option value="appointment">Appointment</option>
							<option value="admin">Admin/Paperwork</option>
							<option value="utility_bill">Utility Bill Review</option>
							<option value="green_tag">Green Tag</option>
							<option value="interconnection">Interconnection</option>
							<option value="install">Install</option>
						</select>
					</label>
				</div>
				<div>
					<label for="task-duedate">
						Due:
						<input type="date" name="task-duedate">
					</label>
				</div>
				<div>
					<label for="lead_priority">
						Task Priority:
						<select name="lead_priority" id="">
							<option value="low">Low</option>
							<option value="medium">Medium</option>
							<option value="high">High</option>
							<option value="now">Now</option>
						</select>
					</label>
				</div>
				<div>
					<label for="lead_status">
						Lead Status:
						<select name="lead_status" id="">
							<option value="lead">Lead</option>
							<option value="opportunity">Opportunity</option>
							<option value="sold">Sold</option>
							<option value="contact_in_30">Contact in (30 days)</option>
							<option value="contact_in_60">Contact in (60 days)</option>
							<option value="contact_in_90">Contact in (90 days)</option>
							<option value="do_not_contact">Do Not Contact</option>
						</select>
					</label>
				</div>
				<div>
					<textarea name="task-notes" cols="60" rows="15">Notes Go In Here</textarea>
				</div>
				<div>
					<button>Submit</button>
				</div>
			</form>
	</div>
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
	