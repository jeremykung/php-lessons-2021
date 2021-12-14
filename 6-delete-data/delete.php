<?php

$id = $_GET['id'];

echo "ID is " . $id;


// CONNECT TO DATABASE
try {
    $conn = new PDO("mysql:host=localhost;dbname=message_board", 'root', '');
    echo "Connected successfully<br>";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$sql = "DELETE FROM Message WHERE message_id=$id";

if ($conn->exec($sql)) {
    echo "Message was deleted";
} else {
    echo "Error deleting message";
}

