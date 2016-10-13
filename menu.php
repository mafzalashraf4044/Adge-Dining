<?php
  define('STYLESHEET', './css/menu.css');
  // define('SCRIPT', './scripts/menu.js');
  define('TITLE', 'Menu | Adge Dining');
  include('./includes/header.php');
?>

<div id="menuPage">
  <div class="row row1">
      <div class="col s12 l4">
          <img class="responsive-img" src="./images/menu.png" alt="Circular Menu Header Image" />
      </div>
      <div class="col s12 l8">
          <h4>EXPERIENCE OUR DELICIOUS MENU!</h4>
      </div>
  </div>
  <div class="row row2">
    <div class="col l12">
      <div class="heading">
				<img src="./images/forkspoonwhite.png" class="circle">
				<h2>BEST OF DINING EXPERIENCE</h2>
				<h5>BOOK YOUR TABLE NOW</h5>
			</div>

      <?php for ($i=0; $i < 6; $i++) { ?>
      <div class="container menu-category">
				<div class="row <?php if($i%2!=0){echo "column-reverse";} ?>">
					<div class="col s12 l5 hide-on-med-and-down"></div>

					<div class="col s12 l7">
            <div class="category-title">
              <h2>Starter</h2>
              <p>Fresh and apetizing starter</p>
            </div>

            <div class="row dishes">
              <?php for ($j=0; $j < 3; $j++) { ?>
                  <div class="col s12 m4">
                    <div class="card">
                      <div class="card-image">
                        <img src="./images/categ1-img1.jpg">
                      </div>
                      <div class="card-content">
                        <h5>Chicken Tender</h5>
                      </div>
                      <div class="card-action">
                        <p>Price: 400 Rs.</p>
                      </div>
                    </div>
                  </div>
              <?php } ?>
            </div>

					</div>
				</div>
			</div>
      <?php } ?>
    </div>
  </div>
</div>


<?php
include('./includes/footer.php');
?>
