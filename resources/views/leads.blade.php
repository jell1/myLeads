@extends ('layout')

@section('main_content')
	<header>
		<h1>My Leads</h1>
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
		<a href="">All</a>
	</nav>
	<div>
		<button disabled class="disabled">21 Leads</button>
		<button>add new lead</button>
		<button class="edit">edit lead</button>
		<button class="warning">delete lead</button>
	</div>
	<table class="leads">
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Type of Lead</th>
			<th>Status</th>
		</tr>
		<tr>
			<td>John Smith</td>
			<td>john@mac.com</td>
			<td>111 111 1111</td>
			<td>Doorknock</td>
			<td>Opportunity</td>
		</tr>	
		<tr>
			<td>John Smith</td>
			<td>john@mac.com</td>
			<td>111 111 1111</td>
			<td>Doorknock</td>
			<td>Opportunity</td>
		</tr>
		<tr>
			<td>John Smith</td>
			<td>john@mac.com</td>
			<td>111 111 1111</td>
			<td>Doorknock</td>
			<td>Opportunity</td>
		</tr>
		<tr>
			<td>John Smith</td>
			<td>john@mac.com</td>
			<td>111 111 1111</td>
			<td>Doorknock</td>
			<td>Opportunity</td>
		</tr>
		<tr>
			<td>John Smith</td>
			<td>john@mac.com</td>
			<td>111 111 1111</td>
			<td>Doorknock</td>
			<td>Opportunity</td>
		</tr>
		<tr>
			<td>John Smith</td>
			<td>john@mac.com</td>
			<td>111 111 1111</td>
			<td>Doorknock</td>
			<td>Opportunity</td>
		</tr>
		<tr>
			<td>John Smith</td>
			<td>john@mac.com</td>
			<td>111 111 1111</td>
			<td>Doorknock</td>
			<td>Opportunity</td>
		</tr>
	</table>
@stop
@section('aside_content')
	<div class="statistics">
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
	</div>
	<div class="goals">
		<div>
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
		</div>
		<div class="chart">
		 
		</div>
	</div>
@stop