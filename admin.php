<?php
  include('./includes/arrays.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Admin Panel | Adge Dining</title>
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
    <link rel="stylesheet" href="./css/admin.css">

</head>

<body>
<!-- Navbar -->
<div class="navbar-fixed">
  <nav class="black">
        <div class="nav-wrapper">

            <!-- Logo for Large Screen Devices -->
            <a href="index.php" class="brand-logo hide-on-med-and-down logo">Admin Panel - <small style="font-family: sans-serif">Adge Dining</small></a>

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
            <div class="logo center hide-on-large-only"><span>Adge Dining - Admin Panel<span></div>

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


  <div class="black white-text section" id="footer">
    <div class="left">&copy; <?php echo Date('Y');?> Adge Dining</div>
    <div class="right">Designed &amp; Developed by Afzal Ashraf</div>
  </div>


    <script src="jquery-2.2.3.min.js"></script>
    <script src="./materialize/js/materialize.min.js"></script>
    <script>
      //Side Nav Initializatino for Mobile Devices
      $(".button-collapse").sideNav();
    </script>
    <script src="<?php echo SCRIPT;?>"></script>

</body>
</html>
