<?php

$pass = "purple123";

echo $pass;
echo "<br>";

// Hashing PW
$hashedPass = password_hash($pass, PASSWORD_BCRYPT);

echo $hashedPass;
echo "<br>";

// Check Hashed PW
$loginPass = "purple123";

echo password_verify($loginPass, $hashedPass);



































// $pass = "password";
// // echo $pass;

// echo "crypt(): <br>";
// echo crypt($pass, "mySalt");

// echo "<br>password_hash():</br>";
// echo password_hash($pass, PASSWORD_BCRYPT);

// // BCRYPT automatically generates a salt and then hashes
// // the salt is then concatenated to the final hash text
// // this is done to prevent rainbow table attacks