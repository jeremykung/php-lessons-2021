<?php

// $conn = new PDO("mysql:host=localhost;dbname=message_board", "root", "lhmethod");

$host = 'localhost';
$dbname = 'message_board';
$user: 'root';
$pass: '';

try {
  $conn = new PDO("mysql:host=$host;dbname=$dbname", "$user", "$pass");
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connection Established";
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}



// $con = mysqli_connect("localhost","my_user","my_password","my_db");

// // Check connection
// if (mysqli_connect_errno()) {
//   echo "Failed to connect to MySQL: " . mysqli_connect_error();
//   exit();
// }