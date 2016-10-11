<?php 
define('STYLESHEET', './css/booking.css');


define("TITLE", "Book Now | Adge Dining");


include('./includes/header.php');


?>

<div id="bookingPage">
  <div class="row">
    <div class="col m12">

      <div>
            <img src="./images/forkspoon.png" class="circle">
        <h2>BEST OF DINING EXPERIENCE</h2>
        <h5>BOOK YOUR TABLE NOW</h5>      
      </div>

      <div class="container booking-form">
        <div class="row">
            <div class="col m5">
              
            </div>

            <div class="col m7">
              <p>Select your dining space</p>

              <div class="select-person">
                <div class="option">
                  <img src="./images/forkspoon.png" class="circle">  
                  <div>
                    <i class="fa fa-check"></i>
                    <p>02</p>
                    <p>Person</p>                  
                  </div>
                </div>

                <div class="option">
                  <img src="./images/forkspoon.png" class="circle">  
                  <div>
                    <i class="fa fa-check"></i>
                    <p>02</p>
                    <p>Person</p>                  
                  </div>
                </div>

                <div class="option">
                  <img src="./images/forkspoon.png" class="circle">  
                  <div>
                    <i class="fa fa-check"></i>
                    <p>02</p>
                    <p>Person</p>                  
                  </div>
                </div>

                <div class="option">
                  <img src="./images/forkspoon.png" class="circle">  
                  <div>
                    <i class="fa fa-check"></i>
                    <p>02</p>
                    <p>Person</p>                  
                  </div>
                </div>                  
            </div>

                <div class="row form-area">
                  <form class="col s12">
                    <div class="row">
                      <div class="input-field col s4">
                        <input placeholder="" id="no-of-person" type="text" class="validate">
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

                    <button type=submit class="waves-effect waves-light btn right white-text">Book Now</button>
                  </form>
                </div>
      </div>          
      </div>

    </div>
  </div>
</div>

<?php 
include('./includes/footer.php');


?>