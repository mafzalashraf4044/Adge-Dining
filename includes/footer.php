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


<!-- Database Logic For Subscribe Form Submission -->

<?php

  $conn = open_db_conn();
  $name = $email = "";
  $nameErr = $emailErr = "";
  $show_dialog_box = false;
  $errors = false;
  $duplicate_email = false;

  //This code will run when the user submits the form and the page reloads(b/c of action att set to PHP_SELF)
  if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['submit'] == 'Join'){

    $show_dialog_box = true;
    $name = $_POST["name"];
    $email = $_POST["email"];


    //is_duplicate is a method inside db.php file, used to check if the given value already exists in the column specified
      $sql = "SELECT email FROM subscribed_customers";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
              if($row["email"] == $email){
                  $duplicate_email = true;
              }
          }
      }



    //if the email address already exists, form will not be submitted
    if(!$duplicate_email){
      $sql = "INSERT INTO subscribed_customers (name, email)
      VALUES ('$name','$email')";

      if(!empty($_POST["name"])){
        $name = sanitize_input($_POST["name"]);
      }else{
        $nameErr = "Name is Required!";
        $errors = true;
      }

      if(!empty($_POST["email"])){
        $email = sanitize_input($_POST["email"]);
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
      }else{
        $emailErr = "Email is Required!";
        $errors = true;
      }

      if (!$errors) {
        $conn->query($sql);
      }

    }

    $conn->close();
  }
 ?>


<!-- Dialog box for Form Submission msg -->
<div id="modal1" class="modal">

  <div class="modal-content">

  <?php if($errors) {?>
    <h4>Signup Failed !</h4>
    <div class="divider"></div>
    <p><?php if(isset($nameErr)){echo $nameErr;} ?></p>
    <p><?php if(isset($emailErr)){echo $emailErr;} ?></p>
  <?php } ?>

  <?php if(!$errors && !$duplicate_email) {?>
    <h4>Congratulations !</h4>
    <div class="divider"></div>
    <p>You have successfully Subscripted to our Offers</p>
  <?php } ?>

  <?php if($duplicate_email) {?>
    <h4>Dear Customer !</h4>
    <div class="divider"></div>
    <p>You have already Signed Up to our Special Offers!</p>
  <?php } ?>

  </div>
  <div class="modal-footer">
    <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
  </div>
</div>



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

            <input type="submit" class="waves-effect waves-light btn" name="submit" value="Join" >
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


<!-- Opening model On Subscription Form Submission -->
    <?php if($show_dialog_box) {?>
      <script type="text/javascript">
        $(document).ready(function(){
          // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
          $('#modal1').openModal();
        });
      </script>
    <?php } ?>

<!-- Opening model On Booking Form Submission -->
    <?php if($show_dialog_box2) {?>
      <script type="text/javascript">
        $(document).ready(function(){
					$('#modal2').openModal();
          // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        });

        $(document).ready(function(){
         $('.carousel').carousel();
       });

      </script>
    <?php } ?>


</body>
</html>
