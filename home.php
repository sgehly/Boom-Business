<?php include('header.php') ?>
<style>
	select{
		background:none;
		color:white;
		color:white;
		border:1px solid white;
		border-radius:0px !important;
	}
	h1{
		font-size:64px;
		color:white;
	}
	.homepage{
		text-align:center;
		margin-top:90px;
	}
	.btn-search{
		font-size:64px;
		margin-top:20px;
	}
	.btn-little{
		font-size:36px;
	}
</style>
<div class="container homepage">
	<h1>I'm a(n)
	<select>
		<option>Engineering</option>
		<option>Mechanics</option>
		<option>Construction</option>
		<option>Finance</option>
		<option>Accounting</option>
		<option>Technology</option>
		<option>Medical</option>
	</select>
	<select>
		<option>entrepreneur</option>
		<option>investor</option>
	</select>
	<a class="btn btn-primary btn-block btn-search">Search!</a>
	<h1>OR</h1>
	<a class="btn btn-success btn-little">See Businesses</a>
	<a class="btn btn-warning btn-little">See Investors</a>
	<a class="btn btn-danger btn-little">See Resources</a>
</div>