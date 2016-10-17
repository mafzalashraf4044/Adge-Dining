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

function validate_input($input_value){
    $err_msg = NULL;

    if(!empty($input_value)){
      $input_value = sanitize_input($input_value);
    }else{
      $err_msg = "Name is Required!";
    }

    return ['input_value'=>$input_value, 'err_msg'=>$err_msg];
}

function sanitize_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
