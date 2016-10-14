<?php
  include('./includes/arrays.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title><?php echo TITLE?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/8a2d7d85ce.js"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Architects+Daughter" rel="stylesheet">

    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Materialize CSS-->
    <link rel="stylesheet" href="./materialize/css/materialize.min.css">

    <!-- Custom CSS-->
    <link rel="stylesheet" href="./css/header&footer.css">
    <link rel="stylesheet" href="<?php echo STYLESHEET?>">




</head>

<body>
<!-- Navbar -->
<div class="navbar-fixed">
  <nav class="black">
        <div class="nav-wrapper">

            <!-- Logo for Large Screen Devices -->
            <a href="index.php" class="brand-logo hide-on-med-and-down logo">Adge Dining</a>

            <ul class="hide-on-med-and-down right navbar-links">
                <?php foreach($navbar_links as $value) {?>
                <li class="  <?php if(strcmp(basename($_SERVER['PHP_SELF']), $value['link'])  == 0){echo "current-page";} ?>">
                    <a href="<?php echo $value['link']?>"><?php echo $value['name']?></a>
                </li>
                <?php }?>
            </ul>

            <!-- Collapse button for mobile devices-->
            <a href="index.php" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

            <!-- Logo for Mobile Devices -->
            <div class="logo center hide-on-large-only"><span>Adge Dining<span></div>

          <!-- Side Nav for Mobile Devices -->
          <ul class="side-nav" id="mobile-demo">
            <a href="index.php" class="center"><div class="logo"><h4>Adge Dining</h4></div></a>
            <?php foreach($navbar_links as $value) {?>
              <div class="divider"></div>
              <li><a href="<?php echo $value['link']?>"><?php echo $value['name']?></a></li>
            <?php }?>
            <div class="divider"></div>
          </ul>
      </div>
    </nav>
  </div>

  <!-- Image Carousel -->
  <div class="carousel carousel-slider" id="slideShow" data-indicators="true">

    <div class="carousel-fixed-item center white-text hide-on-med-and-down">
      <p>Adge Dining - Best Restuarant in Town</p>
      <h2>ITS ALL ABOUT GOOD FOOD</h2>
      <h3>Come &amp; Experence our best of world class cusine!</h3>
    </div>

     <?php foreach($carousel_img_urls as $value) {?>
        <div class="carousel-item"><img src="<?php echo $value?>"></div>
     <?php }?>

  </div>
