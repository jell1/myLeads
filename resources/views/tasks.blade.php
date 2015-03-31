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
		<a href="#" class="count">3 Tasks</a>
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
			<td>4/2/2015</td>
			<td>Lead</td>
		</tr>
		<tr>
			<td>Utility Bill Review</td>
			<td>Charlie</td>
			<td>Jane Simpson</td>
			<td>602 212 9823</td>
			<td>4/2/2015</td>
			<td>Lead</td>
		</tr>
		<tr>
			<td>Create Quote</td>
			<td>Charlie</td>
			<td>Michael Meyers</td>
			<td>480 993 9382</td>
			<td>4/2/2015</td>
			<td>Lead</td>
		</tr>
	</table>
@stop

@section('aside_content')
	<iframe class="calendar" src="https://www.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;showTz=0&amp;height=350&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=justinleon111%40gmail.com&amp;color=%232952A3&amp;ctz=America%2FPhoenix" style=" border-width:0 " width="350" height="350" frameborder="0" scrolling="no"></iframe>

	<iframe class="calendar" src="https://www.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;showTz=0&amp;mode=AGENDA&amp;height=350&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=justinleon111%40gmail.com&amp;color=%232952A3&amp;ctz=America%2FPhoenix" style=" border-width:0 " width="350" height="350" frameborder="0" scrolling="no"></iframe>

@stop