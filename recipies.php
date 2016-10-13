<?php
	define('STYLESHEET', './css/recipies.css');
	define('SCRIPT', './scripts/recipies.js');
	define("TITLE", "Recipies | Adge Dining");
	include('./includes/header.php');
?>

<div id="recipiesPage">
  <div class="container">
    <div class="row">
  		<div class="col l12">

  			<div class="heading">
  						<img src="./images/forkspoon.png" class="circle">
  						<h2>IT'S FINGER SMOKIN' GOOD !</h2>
  						<h5>OUR FEATURE RECIPES</h5>
  			</div>

				<div class="card">
					<div class="card-image waves-effect waves-block waves-light">
						<img class="activator" src="./images/categ1-img1.jpg">
					</div>
					<div class="card-content">
						<span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
						<p><a href="#">This is a link</a></p>
					</div>
					<div class="card-reveal">
						<span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
						<p>Here is some more information about this product that is only revealed once clicked on.</p>
					</div>
				</div>

  		</div>

  	</div>
  </div>

</div>
<?php
include('./includes/footer.php');


?>
