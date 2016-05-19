<?php include('header.php') ?>

<div class="signupBox container" style="margin:0 auto">
	<h1>Stories</h1>
	<p>Hello entrepreneur! This is an amazing list of success stories that you may be able to take a thing or two from.</p>
	<div class="display:block">
		<a class="btn btn-danger" style="width:400px;" href="./writestory.php">Write a Story</a>
	</div>
	<hr>
	<div style="float:left;">Category:
	<select>
		<option>Engineering</option>
		<option>Mechanics</option>
		<option>Construction</option>
		<option>Finance</option>
		<option>Accounting</option>
		<option>Technology</option>
		<option>Medical</option>
	</select>
	</div><br><br>
	<?php for($i=0;$i<12;$i++){?>
	<div class="col-md-3">
		<div class="card">
		  <img class="card-img-top" src="http://www.impactforchildren.com/wp-content/uploads/2012/12/shutterstock_95571682.jpg" alt="Card image cap" style="width:90%;padding-top:10px;">
		  <div class="card-block">
		    <h4 class="card-title">How I Became a Billionaire at 10</h4>
		    <span class="label label-primary" style="border:1px solid lightgray;border-radius:4px;padding:5px;margin:0;">By Lorem Ipsum</span><br><br>
		    <p class="card-text">I was just learning to ride my bike when...</p>
		    <a href="#" class="btn btn-danger">Read Full Story</a>
		  </div>
		</div>
	</div>
	<?php } ?>
</div>