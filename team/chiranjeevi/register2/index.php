<!DOCTYPE html>
<html>
<head>
	<title>Register/Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="script.js"></script>
</head>
<body>
<!--http://codepen.io/victormakcy/pen/lEKoh-->
<div class="wrapper">
	<div class="btn-group" id="form-selector">
		<button type="button" class="btn btn-selector active" id="sign-up-btn">Sign Up</button>
		<button type="button" class="btn btn-selector" id="log-in-btn">Log In</button>
	</div>
	<div class="form" id="sign-up-form">
		<h2 class="form-title">Sign Up</h2>
		<input type="text" class="input-std" id="email" placeholder="Email">
		<input type="text" class="input-half" id="first-name" placeholder="First Name">
		<input type="text" class="input-half" id="last-name" placeholder="Last Name">
		<input type="password" class="input-std" id="password" placeholder="Password">
		<input type="password" class="input-std" id="password-confirmation" placeholder="Password Confirmation">
		<button type="button" class="btn-submit" id="sign-up">Sign Up!</button>
	</div>
	<div class="form" id="log-in-form">
		<h2 class="form-title">Log In</h2>
		<input type="text" class="input-std" id="email" placeholder="Email">
		<input type="password" class="input-std" id="password" placeholder="Password">
		<div id="remember-me-wrapper">
			<input type="checkbox" id="remember-me">
			<label for="remember-me">Remember Me</label>
		</div>
		<button type="button" class="btn-submit" id="log-in">Log In!</button>
	</div>
</div>
</body>
</html>