<?php
// READ

try {
    $conn = new PDO("mysql:host=localhost;dbname=message_board", 'root', '');
    echo "Connection established";
} catch (PDOException $e) {
    echo "Error: " . $e;
}

$result = $conn->query("SELECT * FROM `Message`");

foreach($result as $item) {

    $id = $item["message_id"];
    $name = $item["name"];
    $message = $item["message"];

    echo "<p>$id</p>";
    echo "<h2>$name</h2>";
    echo "<div>$message</div>";
    
}