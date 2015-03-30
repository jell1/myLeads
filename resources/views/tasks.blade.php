@extends ('layout')

@section('main_content')
	<header>
		<h1>My Tasks</h1>
		<div class="details">
			<ul>
				<li><i class="fa fa-map-marker"></i> Phoenix</li>	
				<li><i class="fa fa-user"></i> {{ Auth::User()->first_name }}</li>	
			</ul>
		</div>
	</header>
	<div class="info">
		<a href="/leads" class="count">3 Tasks</a>
		<a href="/task/add">add task</a>
	</div>
	<table class="tasks">
		<tr>
			<th>Task</th>
			<th>User</th>
			<th>Lead Name</th>
			<th>Phone</th>
			<th>Date</th>
			<th>Status</th>
		</tr>
		<tr>
			<td>Contact Lead</td>
			<td>Charlie</td>
			<td>Michael Jordan</td>
			<td>480 234 3212</td>
			<td>5/5/2015</td>
			<td>Lead</td>
		</tr>
		<tr>
			<td>Utility Bill Review</td>
			<td>Charlie</td>
			<td>Jane Simpson</td>
			<td>602 212 99823</td>
			<td>5/5/2015</td>
			<td>Lead</td>
		</tr>
		<tr>
			<td>Create Quote</td>
			<td>Charlie</td>
			<td>Michael Meyers</td>
			<td>480 993 9382</td>
			<td>5/5/2015</td>
			<td>Lead</td>
		</tr>
	</table>




@stop

@section('aside_content')
	<iframe src="https://www.google.com/calendar/embed?src=justinleon111%40gmail.com&ctz=America/Phoenix" style="border: 0" width="300" height="410" frameborder="0" scrolling="no">	
	</iframe>


@stop