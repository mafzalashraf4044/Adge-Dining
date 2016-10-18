<?php
  include('../admin-header.php');
  include('../../includes/db.php');
?>

<div class="panel-body booking">
  <h2>Pending Reservations</h2>
  <?php
    $conn = open_db_conn();

    if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['submit'] == 'Delete'){

      $id = $_POST['id'];
      $sql = "DELETE FROM online_table_booking WHERE booking_id=$id";

      if ($conn->query($sql) === TRUE) {
          echo "Record deleted successfully";
      } else {
          echo "Error deleting record: " . $conn->error;
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

      if($row["confirmed"] == 0){?>

          <div class="col s12 m4">
            <div class="card reservation-card">
              <div class="card-content">

                <div class="row">
                  <div class="col s12 l6">
                    <table class="bordered">

                        <tr>
                            <th>Name: </th>
                            <td><?php echo $row["name"]; ?></td>
                        </tr>
                        <tr>
                            <th data-field="id">Email: </th>
                            <td><?php echo $row["email"]; ?></td>
                        </tr>
                        <tr>
                            <th data-field="id">Phone Number: </th>
                            <td><?php echo $row["ph_no"]; ?></td>
                        </tr>

                        <tr class="hide-on-large-only">
                            <th>No of Person: </th>
                            <td><?php echo $row["no_of_person"]; ?></td>
                        </tr>
                        <tr class="hide-on-large-only">
                            <th data-field="id">Time: </th>
                            <td><?php echo $row["time"]; ?></td>
                        </tr>
                        <tr class="hide-on-large-only">
                            <th data-field="id">Day: </th>
                            <td><?php echo $row["day"]; ?></td>
                        </tr>

                    </table>

                  </div>
                  <div class="col s12 l6 hide-on-med-and-down">
                    <table class="bordered">

                        <tr>
                            <th>No of Person: </th>
                            <td><?php echo $row["no_of_person"]; ?></td>
                        </tr>
                        <tr>
                            <th data-field="id">Time: </th>
                            <td><?php echo $row["time"]; ?></td>
                        </tr>
                        <tr>
                            <th data-field="id">Day: </th>
                            <td><?php echo $row["day"]; ?></td>
                        </tr>

                    </table>

                  </div>
                </div>
              </div>
              <div class="card-action">
                <form  action="./confirmed.php" method="POST">
                  <input type="hidden" name="id" value="<?php echo $row['booking_id'];?>">
                  <input type="submit" class="modal-action modal-close waves-effect waves-green btn-flat" name="submit" value="Confirm">
                </form>

                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                  <input type="hidden" name="id" value="<?php echo $row['booking_id'];?>">
                  <input type="submit" class="modal-action modal-close waves-effect waves-green btn-flat" name="submit" value="Delete">
                </form>
              </div>
            </div>
          </div>

  <?php }else {
   echo "<h5>There are no Pending Reservations</h5>";
  }

  }

     }else {
      echo "<h5>There are no Pending Reservations</h5>";
    }
    $conn->close();

  ?>
</div>

  <?php
    include('../admin-footer.php');
  ?>
