<?php
  $servername = "localhost";
  $username = "admin";
  $password = "admin";
  $dbname = "trailer_park";
  $first_name = $_POST["first_name"];
  $last_name = $_POST["last_name"];
  $user_name = $_POST["user_name"];
  $email = $_POST["email"];
  $password = $_POST["input_password"];

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  $sql = "INSERT INTO user (first_name, last_name, user_name, email, password)
  VALUES ($first_name, $last_name, $user_name, $email, $password)";
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