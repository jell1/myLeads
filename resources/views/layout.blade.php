<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="_token" content="{{ csrf_token() }}" />
	<title>MyLeads</title>
	<link href='http://fonts.googleapis.com/css?family=Rokkitt|Open+Sans:300,600|Dancing+Script' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="/css/normalize.css">
	<link rel="stylesheet" href="/css/main.css">
</head>
<body>
	@section('header')
	<header class="primary-header">
		<nav>
			<div class="logo">
				<h2><a href="/"><i class="fa fa-key"></i><span class="logo">   my</span>Leads</a></h2>
			</div>
			<ul>
				<li><a href="/leads">Leads</a></li>
				<li><a href="">Tasks</a></li>
				<li><a href="">Login</a></li>
				<li><a href="/auth/logout">Logout</li></a>
			</ul>
		</nav>
	</header>
	@show
	<main>
		@yield('main_content')
	</main>
	<aside class="detail-dashboard">
		@yield('aside_content')
	</aside>
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script src="http://code.highcharts.com/highcharts.js"></script>
	<script src="/javascript/main.js"></script>
</body>
</html>