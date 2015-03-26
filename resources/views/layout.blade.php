<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="_token" content="{{ csrf_token() }}" />
	<title>MyLeads</title>
	<link href='http://fonts.googleapis.com/css?family=Rokkitt|Open+Sans:300,600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="/css/normalize.css">
	<link rel="stylesheet" href="/css/main.css">
</head>
<body>
	<header class="primary-header">
	@section('header')
		<nav>
			<h2><i class="fa fa-key"></i>LOGO</h2>
			<ul>
				<li>Leads</li>
				<li>Tasks</li>
				<li>Login</li>
				<li>Logout</li>
			</ul>
		</nav>
	@show
	</header>
	<main>
		@yield('main_content')
	</main>
	<aside class="detail-dashboard">
		@yield('aside_content')
	</aside>
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script src="/javascript/main.js"></script>
</body>
</html>