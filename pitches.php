<?php include('header.php') ?>

<div class="signupBox container" style="margin:0 auto">
	<h1>Pitches</h1>
	<p>Hello investor! This is a curated list of cool new projects that you may want to invest in. If you would like to contact the creator of a project, visit their site first and click the "contact" button!</p>
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
		  <img class="card-img-top" src="http://www.goodworklabs.com/wp-content/uploads/2016/05/IoT.jpg" alt="Card image cap" style="width:90%;padding-top:5px;">
		  <div class="card-block">
		    <h4 class="card-title">My Cool Project!</h4>
		    <p class="card-text">It's totally worth investing in, pinky promise.</p>
		    <a href="./arandompitch.php" class="btn btn-success">Read More</a>
		  </div>
		</div>
	</div>
	<?php } ?>
</div>