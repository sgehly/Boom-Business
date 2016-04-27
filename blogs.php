<?php include('header.php') ?>

<div class="signupBox container" style="margin:0 auto">
	<h1>Resources</h1>
	<p>Hello entrepreneur! This is a curated list of resources for you to use for free in order to kickstart your business, present to investors, and connect with others. If you would like to contribute, please email resources@boombusiness.org</p>
	<?php for($i=0;$i<12;$i++){?>
	<div class="col-md-3">
		<div class="card">
		  <img class="card-img-top" src="http://www.envision-creative.com/wp-content/uploads/powerpoint-sample-07a.jpg" alt="Card image cap" style="width:100%">
		  <div class="card-block">
		    <h4 class="card-title">Powerpoint Template</h4>
		    <p class="card-text">A simple powerpoint for a simple business.</p>
		    <a href="#" class="btn btn-primary">Download</a>
		  </div>
		</div>
	</div>
	<?php } ?>
</div>