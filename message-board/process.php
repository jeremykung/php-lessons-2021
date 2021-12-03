<?php
    require_once("database.php");

    try {

        $name = $_POST['name'];
        $message = $_POST['message'];

        $sql = "INSERT INTO `Message` (name, message)
        VALUES ('$name', '$message')";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "<br>New record created successfully";

    } catch (PDOException $e) {
        echo "Error: " . $e;
    }

?>


<a id="submit-btn" href="index.php">Return Home</a>