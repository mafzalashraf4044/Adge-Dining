<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scele=1.0">

    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Materialize CSS-->
    <link rel="stylesheet" href="./materialize/css/materialize.min.css">

    <!-- Custom CSS-->
    <link rel="stylesheet" href="./css/style.css">


</head>
<body>
    
  <div id="navbar" class="navbar-fixed">

        <!-- Dropdown Structure -->
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="#!">one</a></li>
            <li><a href="#!">two</a></li>
            <li class="divider"></li>
            <li><a href="#!">three</a></li>
        </ul>

    <nav>
      <div class="nav-wrapper">

        <div class="logo center hide-on-med-and-down yellow black-text section">
            <h2>Adge Dining</h2>
        </div>
      
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <div class="logo center hide-on-large-only"><span>Adge Dining<span></div>

          <ul class="hide-on-med-and-down center green" id="centerList">
            <li><a href="sass.html">Sass</a></li>
            <li><a href="badges.html">Components</a></li>
            <li><a href="collapsible.html">Javascript</a></li>
            <li><a href="mobile.html">Mobile</a></li>
          </ul>      

          <ul class="side-nav" id="mobile-demo">
            <a href="#" class="center"><div class="logo"><h4>Adge Dining</h4></div></a>
            <li><a href="sass.html">Sass</a></li>
            <li><a href="badges.html">Components</a></li>
            <li><a href="collapsible.html">Javascript</a></li>
            <li><a href="mobile.html">Mobile</a></li>
          </ul>
      </div>
    </nav>    
  
  </div>

  <div id="slideShow">
    <div class="carousel-item"><img src="./images/slideShowImg1.jpg"></div>
    <div class="carousel-item"><img src="./images/slideShowImg2.jpg"></div>
    <div class="carousel-item"><img src="./images/slideShowImg3.jpg"></div>
    <div class="carousel-item"><img src="./images/slideShowImg4.jpg"></div>
  </div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
    <script src="jquery-2.2.3.min.js"></script>
    <script src="./materialize/js/materialize.min.js"></script>
    <script src="./scripts/script.js"></script>
</body>
</html>