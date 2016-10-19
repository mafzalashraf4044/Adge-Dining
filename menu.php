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
				<h2>COMPLETE YOUR DAY</h2>
				<h5>ALL DAY FOOD SOLUTIONS</h5>
			</div>

      <?php
        $conn = open_db_conn();

        $sql = "SELECT menu_id, category, caption, img_url FROM menu";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {


        while($row = $result->fetch_assoc()) { ?>
            <?php $id = $row["menu_id"]; ?>
            <div class="container menu-category">
      				<div class="row ">
      					<div class="col s12 l5 hide-on-med-and-down" style="background-image: url('./images/<?php echo $row["img_url"];?>.jpg');"></div>

      					<div class="col s12 l7">
                  <div class="category-title">
                    <h2><?php echo $row["category"]; ?></h2>
                    <p><?php echo $row["caption"]; ?></p>
                  </div>

      <?php
        $_sql = "SELECT category, item_name, img_url, price FROM menu_items WHERE category = $id";

        $_result = $conn->query($_sql);

        if ($_result->num_rows > 0) {?>


          <div class="dishes">
            <div class="carousel">

        <?php while($_row = $_result->fetch_assoc()) {?>
          <span class="carousel-item">

                          <div class="card">
                            <div class="card-image">
                              <img src="./images/<?php echo $_row["img_url"];?>.jpg">
                            </div>
                            <div class="card-content">
                              <h5><?php echo $_row["item_name"]; ?></h5>
                            </div>
                            <div class="card-action">
                              <p>Price: <?php echo $_row["price"]; ?> Rs.</p>
                            </div>
                          </div>

          </span>

          <?php } ?>
            </div>
            </div>

          <?php  }?>


      					</div>
      				</div>
      			</div>



      <?php

        }

         }
        $conn->close();
        ?>






    </div>
  </div>
</div>


<?php
include('./includes/footer.php');
?>
