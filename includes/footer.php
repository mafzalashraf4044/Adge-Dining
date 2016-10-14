  <div id="footer1">
    <div class="container">
      <div class="row">
        <div class="col s12 m4">
          <ul class="collection">
            <?php foreach($footer_links as $value) {?>
            <li class="collection-item"><a href="<?php echo $value['link']?>"><?php echo $value['name']?></a></li>
            <?php }?>
          </ul>

          <ul class="socialIcons">
            <?php foreach($social_icons as $value) {?>
              <li><a class="btn-floating btn-large waves-effect waves-light red"><i class="fa fa-<?php echo $value?>"></i></a></li>
            <?php }?>
          </ul>
        </div>

<?php
  $name = $email = "";
  $nameErr = $emailErr = "";


  if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name = $_POST["name"];
    $email = $_POST["email"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "adge-dining";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    function sanitize_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }


    $sql = "INSERT INTO subscribed_customers (name, email)
    VALUES ('$name','$email')";

    if(!empty($_POST["name"])){
      $name = sanitize_input($_POST["name"]);
    }else{
      $nameErr = "Name is Required!";
    }

    if(!empty($_POST["email"])){
      $email = sanitize_input($_POST["email"]);
      $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    }else{
      $emailErr = "Email is Required!";
    }

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
  }
 ?>

        <div class="col m6 s12 offset-m2">
          <h5 class="white-text section">SIGN UP FOR SPECIAL OFFERS</h5>
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" id="footerForm">
            <div class="input-field">
              <input id="name" type="text" name="name" required class="validate white-text">
              <label for="name">Full Name</label>
              <i class="hidden fa fa-warning"> <span>Name is Required!</span></i>
            </div>

            <div class="input-field">
              <input id="email" type="text" name="email" required class="validate white-text">
              <label for="email">Email</label>
              <i class="hidden fa fa-warning"> <span>Email is Required!</span></i>
            </div>

            <button type="submit" class="waves-effect waves-light btn">JOIN</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="black white-text section" id="footer2">
    <div class="left">&copy; <?php echo Date('Y');?> Adge Dining</div>
    <div class="right">Designed &amp; Developed by Afzal Ashraf</div>
  </div>


    <script src="jquery-2.2.3.min.js"></script>
    <script src="./materialize/js/materialize.min.js"></script>
    <script src="./scripts/header&footer.js"></script>
    <script src="<?php echo SCRIPT;?>"></script>

</body>
</html>
