<?php
	define('STYLESHEET', './css/booking.css');
	define('SCRIPT', './scripts/booking.js');
	define("TITLE", "Book Now | Adge Dining");
	include('./includes/header.php');
?>

<div id="bookingPage">
	<div class="row">
		<div class="col l12">

			<div class="heading">
						<img src="./images/forkspoon.png" class="circle">
						<h2>BEST OF DINING EXPERIENCE</h2>
						<h5>BOOK YOUR TABLE NOW</h5>
			</div>

			<div class="container booking-form">
				<div class="row">
					<div class="col s12 l5"></div>

					<div class="col s12 l7">
						<p>Select your dining space</p>

						<div class="select-person">
							<?php foreach ($no_of_person as $value) {?>
								<div class="option">
									<img src="./images/forkspoon.png" class="circle">
									<div>
										<i class="fa fa-check"></i>
										<p class="total-person"><?php echo $value ?></p>
										<?php if(strcmp($value, "custom") != 0){ ?>
										<p>Person</p>
										<?php } ?>
									</div>
								</div>
							<?php } ?>
						</div>

						<!-- Database Logic For Online Booking Form Submission -->

						<?php
							$conn = open_db_conn();

							$inputs_value = array();
							$show_dialog_box2 = false;
							$inputs_err_msg = array();
						  $errors = false;

						  //This code will run when the user submits the form and the page reloads(b/c of action att set to PHP_SELF)
						  if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['submit'] == 'Booking'){
						    $show_dialog_box2 = true;

								foreach ($_POST as $key => $value) {

									if($key != 'submit'){
										$inputs_value += [$key => sanitize_input($value)];
										$inputs_err_msg += [$key => validate_input($key, $value)];

										if($inputs_err_msg[$key] != NULL){
											$errors = true;
										}

									}
								}

								$keys = implode(', ', array_keys($inputs_value));
								$values = implode("','", array_values($inputs_value));

					      $sql = "INSERT INTO online_table_booking ($keys)
					      VALUES ('$values')";

						      if (!$errors && $conn->query($sql)) {
										echo "added successfully!";
						      }else {
										// echo "Error: " . $sql . "<br>" . $conn->error;
									}

						    $conn->close();
						  }
						 ?>

						 <!-- Dialog box for Form Submission msg -->
						 <div id="modal2" class="modal">

						   <div class="modal-content">

						   <?php if($errors) {?>
						     <h4>Booking Form Submission Failed !</h4>
						     <div class="divider"></div>

								 <?php foreach ($inputs_err_msg as $key => $value) {?>
									 <p><?php echo $value ?></p>
 								 <?php }?>

						   <?php } ?>

						   <?php if(!$errors) {?>
						     <h4>Dear Customer !</h4>
						     <div class="divider"></div>
						     <p>Your Booking Request has been received, You will be informed after confirmation! Thank You</p>
						   <?php } ?>

						   </div>
						   <div class="modal-footer">
						     <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
						   </div>
						 </div>


						<div class="row form-area">
							<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" class="col s12">

								<div class="row">
									<div class="input-field col s4">
										<input placeholder="" id="no-of-person" name="no_of_person" required value="" type="text" class="validate">
										<label for="no-of-person">Number of Person</label>
										<i class="hidden fa fa-warning"> <span>Number of Person is Required!</span></i>
									</div>
									<div class="input-field col s4">
										<input placeholder="" id="time" name="time" required type="time" class="validate">
										<label for="time">Time</label>
										<i class="hidden fa fa-warning"> <span>Time is Required!</span></i>
									</div>
									<div class="input-field col s4">
										<input placeholder="" id="day" name="day" required type="text" class="validate">
										<label for="day">Day</label>
										<i class="hidden fa fa-warning"> <span>Day is Required!</span></i>
									</div>
								</div>

								<div class="row">
									<div class="input-field col s4">
										<input placeholder="" id="name" name="name" required type="text" class="validate">
										<label for="name">Enter your name</label>
										<i class="hidden fa fa-warning"> <span>Name is Required!</span></i>
									</div>
									<div class="input-field col s4">
										<input placeholder="" id="phone-number" required name="ph_no" type="text" class="validate">
										<label for="phone-number">Phone number</label>
										<i class="hidden fa fa-warning"> <span>Phone Number is Required!</span></i>
									</div>
									<div class="input-field col s4">
										<input placeholder="" id="email" name="email" required type="text" class="validate">
										<label for="email">Email id</label>
										<i class="hidden fa fa-warning"> <span>Email is Required!</span></i>
									</div>
								</div>
								<input type="submit" class="waves-effect waves-light btn" name="submit" value="Booking">
							</form>
						</div>
					</div>
				</div>
			</div>

			<div class="container contact-us-card">
				<div class="row">
					<div class="col l3 hide-on-med-and-down">
						<h5>OUR <span class="white-text">DELICIOUS FOOD</span> AT YOUR DOORSTEP</h5>
					</div>

					<div class="col s12 l5">
						<h6>Call following number to reserve a table</h6>
						<div><i class="fa fa-phone"></i><h4>+ 0336-0888-808</h4></div>
						<h6>For further information: 0342-3333-222</h6>
					</div>

					<div class="col s12 l4">
						<a class="waves-effect waves-light btn btn-large">Book Table</a>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>


<?php
include('./includes/footer.php');
?>
