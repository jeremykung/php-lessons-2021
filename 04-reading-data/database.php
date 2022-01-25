<?php
// Connect to DB
try {
    $conn = new PDO("mysql:host=localhost;dbname=message_board", 'root', '');
    echo "<div>Connection established</div>";
} catch (PDOException $e) {
    echo "Error: " . $e;
}

// Read Data
// use the PDO query() method to retrieve data and store in $result variable
$result = $conn->query("SELECT * FROM `Message`");

// fetch an associative array for each row of data in $result object
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {

    $id = $row["message_id"];
    $name = $row["name"];
    $message = $row["message"];

    echo "<p>$id</p>";
    echo "<h2>$name</h2>";
    echo "<div>$message</div>";
}