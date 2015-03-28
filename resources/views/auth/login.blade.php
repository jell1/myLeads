<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link href='http://fonts.googleapis.com/css?family=Rokkitt|Open+Sans:300,600|Dancing+Script' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="/css/normalize.css">
	<link rel="stylesheet" href="/css/main.css">
</head>
<body>

	<div class="background">
		<form role="form" method="POST" action="{{ url('/auth/login') }}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="login">
			@if (count($errors) > 0)
				<div class="alert">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
				<div class="login-logo">
					<ul>
						<li><i class="fa fa-3x fa-key"></i></li>
						<li><h1><span class="logo">my</span>Leads</h1></li>
					</ul>
				</div>
			<div class="input"> 
				<i class="fa fa-envelope-square fa-2x"></i> 
				<input type="email" placeholder="Email" class="email" name="email" value="{{ old('email') }}">
			</div> 
			<div class="input"> 
				<i class="fa fa-user fa-2x"></i> 
				<input type="password" name="password" class="password" placeholder="Password">
			</div> 
			<div class="buttons">
				<div class="checkbox">
					<label>
						<input type="checkbox" name="remember"> Remember Me
					</label>
				</div>
				<button type="submit">Login</button>
				<a href="/auth/register" class="register-button">Register</a>
				<a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
			</div>
		</form>
	</div>
</body>
</html>

