<?php
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

function is_duplicate($column, $table) {
  global $conn;
  
  $sql = "SELECT $column FROM $table";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
          if($row["email"] == $email){
              return true;
          }
      }
  }
}

?>
