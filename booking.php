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
							<div class="option">
								<img src="./images/forkspoon.png" class="circle">
								<div>
									<i class="fa fa-check"></i>
									<p class="total-person">02</p>
									<p>Person</p>
								</div>
							</div>

							<div class="option">
								<img src="./images/forkspoon.png" class="circle">
								<div>
									<i class="fa fa-check"></i>
									<p class="total-person">05</p>
									<p>Person</p>
								</div>
							</div>

							<div class="option">
								<img src="./images/forkspoon.png" class="circle">
								<div>
									<i class="fa fa-check"></i>
									<p class="total-person">10</p>
									<p>Person</p>
								</div>
							</div>

							<div class="option">
								<img src="./images/forkspoon.png" class="circle">
								<div>
									<i class="fa fa-check"></i>
									<p class="total-person">15</p>
									<p>Person</p>
								</div>
							</div>
						</div>

						<div class="row form-area">
							<form class="col s12">
								<div class="row">
									<div class="input-field col s4">
										<input placeholder="" id="no-of-person" value="03" type="text" class="validate">
										<label for="no-of-person">Number of Person</label>
									</div>
									<div class="input-field col s4">
										<input placeholder="" id="time" type="text" class="validate">
										<label for="time">Time</label>
									</div>
									<div class="input-field col s4">
										<input placeholder="" id="day" type="text" class="validate">
										<label for="day">Day</label>
									</div>
								</div>

								<div class="row">
									<div class="input-field col s4">
										<input placeholder="" id="name" type="text" class="validate">
										<label for="name">Enter your name</label>
									</div>
									<div class="input-field col s4">
											<input placeholder="" id="phone-number" type="text" class="validate">
										<label for="phone-number">Phone number</label>
									</div>
									<div class="input-field col s4">
										<input placeholder="" id="email" type="text" class="validate">
										<label for="email">Email id</label>
									</div>
								</div>

								<button class="waves-effect waves-light btn right white-text">Book Now</button>
							</form>
						</div>
					</div>
				</div>
			</div>

			<div class="container call-card">
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
