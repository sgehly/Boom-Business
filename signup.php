<?php include('header.php'); ?>

<div class="signup">
	<div class="signupBox">
		<h1>Login</h1>
		<input placeholder="Username" class="niceInput">
		<input placeholder="Password" type="password" class="niceInput">
		<div style="display:flex;align-items:center">
			<input type="checkbox" style="transform:scale(1.3);"><span style="margin-top: -2px;padding-left:10px;">Remember me</span>
		</div>
		<br>
		<a class="btn btn-block btn-success">Login</a>
		<a class="btn btn-block btn-primary">Forgot Password?</a>
	</div>
	<h1 style="color:white;">OR</h1>
	<div class="signupBox">
		<h1>Sign Up</h1>
		<h6>Please select what best describes you</h6>
		<hr>
		<a class="btn btn-primary">Entrepreneur</a>
		<a class="btn btn-success">Investor</a>
		<a class="btn btn-danger">Institution</a>
		<hr>
		<h6>and tell us a bit about yourself</h6>
		<hr>
		<input placeholder="Full Name" class="niceInput">
		<input placeholder="Company Name" class="niceInput">
		<input placeholder="Username" class="niceInput">
		<input placeholder="Password" type="password" class="niceInput">
		<a class="btn btn-block btn-success">Signup</a>
	</div>
</div>