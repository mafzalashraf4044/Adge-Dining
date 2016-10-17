<?php
  include('./includes/admin-header.php');
?>

<?php
  $conn = open_db_conn();

  if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['submit'] == 'Confirm'){

    $id = $_POST['id'];
    $sql = "UPDATE online_table_booking SET confirmed='1' WHERE booking_id=$id";

      if ($conn->query($sql)) {
        echo "Confirmed!";
      }else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

    $conn->close();
  }


?>

<?php
  $conn = open_db_conn();

  $sql = "SELECT booking_id, no_of_person, time, day, name, ph_no, email, confirmed FROM online_table_booking";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row

  while($row = $result->fetch_assoc()) {

    if($row["confirmed"] == 1){?>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-content">
              <h5>Name: <?php echo $row["name"]; ?></h5>
              <h5>Name: <?php echo $row["no_of_person"]; ?></h5>
              <h5>Name: <?php echo $row["time"]; ?></h5>
              <h5>Name: <?php echo $row["day"]; ?></h5>
              <h5>Name: <?php echo $row["ph_no"]; ?></h5>
              <h5>Name: <?php echo $row["email"]; ?></h5>
            </div>
            <div class="card-action">
              <form action="./admin-confirmed-booking.php" method="POST">
                <input type="input" name="id" value="<?php echo $row['booking_id'];?>">
                <input type="submit" class="modal-action modal-close waves-effect waves-green btn-flat" name="submit" value="Confirm">
              </div>
              </form>
          </div>
        </div>

<?php }}

   }else {
    echo "0 results";
  }
  $conn->close();

?>

<?php
  include('./includes/admin-footer.php');
?>
