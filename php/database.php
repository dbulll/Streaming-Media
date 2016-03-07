<?php

//based on this tutorial: http://codular.com/php-mysqli

//make the connection

$conn = new mysqli('localhost', 'admin', 'admin', 'trailer_park'); //change user name to yours

if($conn->connect_errno > 0){
die('Unable to connect to database [' . $conn->connect_error . ']');
}

//echo 'hello';

$first_name = "Nipan2";

$last_name = "Maniar2";

$password = "green32";

$user_name = "adminemail";
$email ="admin";


$sql = "INSERT INTO user (first_name, last_name,   password)
  VALUES ('$first_name', '$last_name',  '$password')";
  if ($conn->query($sql) === TRUE) 
  {
    echo "New record created successfully";
  } 
  else 
  {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();


?>
