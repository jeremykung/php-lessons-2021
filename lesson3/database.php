<?php 

// Connect to Database


try {

    // CONNECT TO DATABASE
    $conn = new PDO("mysql:host=localhost;dbname=message_board", 'root', 'lhmethod');
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";

    // WRITE TO DATABASE
    $sql = "INSERT INTO `Message` (name, message) VALUES ('Timmy', 'I need to go washroom')";
    $conn->exec($sql);
    echo "Message added success!";

} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
};