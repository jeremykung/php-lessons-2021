<?php

// $conn = new PDO("mysql:host=localhost;dbname=message_board", "root", "lhmethod");

try {
  $conn = new PDO("mysql:host=localhost;dbname=message_board", "root", "lhmethod");
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
  $sql = "INSERT INTO `Message` (name, message)
  VALUES ('Bob', 'Tennis this weekend?')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}



// $con = mysqli_connect("localhost","my_user","my_password","my_db");

// // Check connection
// if (mysqli_connect_errno()) {
//   echo "Failed to connect to MySQL: " . mysqli_connect_error();
//   exit();
// }