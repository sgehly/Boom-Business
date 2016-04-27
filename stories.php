<?php include('header.php') ?>

<div class="signupBox container" style="margin:0 auto">
	<h1>Stories</h1>
	<p>Hello entrepreneur! This is an amazing list of success stories that you may be able to take a thing or two from.</p>
	<div class="display:block">
		<a class="btn btn-danger" style="width:400px;" href="./writestory.php">Write a Story</a>
	</div>
	<hr>
	<?php for($i=0;$i<12;$i++){?>
	<div class="col-md-3">
		<div class="card">
		  <img class="card-img-top" src="https://pbs.twimg.com/profile_images/465132577582370816/dQoNAWLr_400x400.jpeg" alt="Card image cap" style="width:90%;padding-top:10px;">
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