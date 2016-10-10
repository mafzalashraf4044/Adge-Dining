<?php 
  include('./includes/arrays.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
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

    <!-- Dropdown Structure -->
    <ul id="dropdown1" class="dropdown-content">
        <li><a href="#!">one</a></li>
        <li><a href="#!">two</a></li>
        <li class="divider"></li>
        <li><a href="#!">three</a></li>
    </ul>

    <nav class="black">
      <div class="nav-wrapper">

          <!-- Logo for Large Screen Devices -->        
          <a href="#" class="brand-logo hide-on-med-and-down">Adge Dining</a>

          <ul class="hide-on-med-and-down right" id="centerList">
            <?php foreach($navbar_links as $value) {?>
              <li><a href="<?php echo $value['link']?>"><?php echo $value['name']?></a></li>
            <?php }?>
          </ul>      

          <!-- Collapse button for mobile devices-->
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

          <!-- Logo for Mobile Devices -->
          <div class="logo center hide-on-large-only"><span>Adge Dining<span></div>

          <ul class="side-nav" id="mobile-demo">
            <a href="#" class="center"><div class="logo"><h4>Adge Dining</h4></div></a>
            <div class="divider"></div>
            <li><a href="sass.html">Sass</a></li>
            <div class="divider"></div>
            <li><a href="badges.html">Components</a></li>
            <div class="divider"></div>
            <li><a href="collapsible.html">Javascript</a></li>
            <div class="divider"></div>
            <li><a href="mobile.html">Mobile</a></li>
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

    <div class="carousel-item"><img src="./images/bg1.jpg"></div>
    <div class="carousel-item"><img src="./images/bg2.jpg"></div>
    <div class="carousel-item"><img src="./images/bg3.jpg"></div>
    <div class="carousel-item"><img src="./images/bg4.jpg"></div>


  </div>
