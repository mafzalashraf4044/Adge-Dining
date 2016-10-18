<?php include('../../includes/arrays.php') ?>

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
    <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">

    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Materialize CSS-->
    <link rel="stylesheet" href="../../materialize/css/materialize.min.css">

    <!-- Custom CSS-->
    <link rel="stylesheet" href="../../css/admin.css">

</head>

<body>
  <div class="black white-text" id="header">
    <div class="left">Admin Panel Home</div>
    <div class="right">Logged In as: Afzal Ashraf</div>
    <img class="responsive-img circle right" src="../../images/user-icon.png">
  </div>


<!-- Navbar -->
<div class="divider white hide-on-large-only"></div>
<div class="section black white-text hide-on-large-only" id="header-sm-scr">
  <a href="#" data-activates="side-nav" class="button-collapse"><i class="material-icons">menu</i></a>
  <h5><a href="index.php" class="brand-logo logo center">Adge Dining - <small>Admin Panel</small></a></h5>
</div>


  <ul id="side-nav" class="side-nav fixed">
    <li><div class="userView">
      <img class="background" src="../../images/bg5.jpg">
      <a href="#!"><h4 class="white-text brand-logo">Adge Dining</h4></a>
      <a href="#!"><h5 class="white-text">Admin Panel</h5></a>
    </div></li>
    <li class="no-padding">
      <ul class="collapsible collapsible-accordion">
        <li>
          <a class="collapsible-header">Table Reservation<i class="material-icons right">arrow_drop_down</i></a>
          <div class="collapsible-body">
            <ul>
              <li><a href="../booking/pending.php">Pending Reservations</a></li>
              <li><a href="../booking/confirmed.php">Confirmed Reservation</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </li>


    <li><div class="divider"></div></li>
    <li class="no-padding">
      <ul class="collapsible collapsible-accordion">
        <li>
          <a class="collapsible-header">Mange Menu<i class="material-icons right">arrow_drop_down</i></a>
          <div class="collapsible-body">
            <ul>
              <li><a href="#!">New Category</a></li>
              <li><a href="#!">Add Items</a></li>
              <li><a href="#!">Delete Menu</a></li>
              <li><a href="#!">Edit Menu</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </li>
    <li><div class="divider"></div></li>
    <li class="no-padding">
      <ul class="collapsible collapsible-accordion">
        <li>
          <a class="collapsible-header">Recipies<i class="material-icons right">arrow_drop_down</i></a>
          <div class="collapsible-body">
            <ul>
              <li><a href="#!">Pending Approval</a></li>
              <li><a href="#!">Delete</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </li>
    <li><div class="divider"></div></li>
    <li class="no-padding">
      <ul class="collapsible collapsible-accordion">
        <li>
          <a class="collapsible-header">Visit Site<i class="material-icons right">arrow_drop_down</i></a>
          <div class="collapsible-body">
            <ul>
              <?php foreach($navbar_links as $value) {?>
                <li><a href="<?php echo "../../" . $value['link']?>"><?php echo $value['name']?></a></li>

              <?php }?>
            </ul>
          </div>
        </li>
      </ul>
    </li>
  </ul>
