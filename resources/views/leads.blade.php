@extends ('layout')

@section('main_content')
	<header>
		<h1>My Leads</h1>
		<div class="details">
			<ul>
				<li><i class="fa fa-map-marker"></i> Phoenix</li>	
				<li><i class="fa fa-user"></i> {{ Auth::User()->first_name }} </li>	
			</ul>
		</div>
	</header>
	<nav class="tabs" id="lead-tabs">
		<a href="#" class="1">Lead</a>
		<a href="#" class="2" >Opportunity</a>
		<a href="#" class="3">Sold</a>
		<a href="#" class="4">Contact In</a>
		<a href="#" class="5">Do Not Contact</a>
		<a href="#" class="all">All</a>
	</nav>
	<div class="info">
		<a href="#" class="count">{{ $count }} Leads</a>
		<a href="/lead/add">add lead</a>
	</div>
	<table class="leads">
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Type of Lead</th>
			<th>Status</th>
		</tr>
	@foreach($leads as $idx=>$l)
		<tr status-id="{{ $l->status_id }}">
			<td><a href="/leadDetail/{{ $l->lead_id }}">{{ $l->first_name . ' ' . $l->last_name }}</a></td>
			<td>{{ $l->email }}</td>
			<td>{{ $l->phone }}</td>
			<td>{{ $l->type }}</td>
			<td class="status">{{ $l->status()->status }}</td>
			<input type="hidden" name="lead-id" value="{{ $l->lead_id }}">
		</tr>
	@endforeach	
	</table>
@stop
@section('aside_content')
{{-- 	<div class="statistics">
		<div class="leads">
			<h1>21</h1>
			<p>Leads</p>
		</div>
		<div class="opps">
			<h1>6</h1>
			<p>Opps</p>	
		</div>
		<div class="opps-to-leads">
			<h1>30%</h1>
			<p>Opps to Leads</p>
		</div>
	</div> --}}
	
		{{-- <div>
			<p>Monthly Goal<p>
			<h4>10</h4>
		</div>
		<div>
			<p>Currently Sold<p>
			<h4>4</h4>
		</div>
		<div>
			<p>Days Left<p>
			<h4>12</h4>
		</div> --}}
	<div class="chart-container">
		<div id="container" style="width:300px; height:300px; margin:30px auto"></div>
	
	</div>
@stop