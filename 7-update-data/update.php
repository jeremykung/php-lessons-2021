<?php

// Get variable
$id = $_GET['id'];
$name = $_POST['name'];
$message = $_POST['message'];

// CONNECT TO DATABASE
try {
    $conn = new PDO("mysql:host=localhost;dbname=message_board", 'root', '');
    echo "Connected successfully<br>";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// $sql = "UPDATE Message SET name='$name', message='$message' WHERE message_id='$id'";

// $conn->exec($sql);

// Prepared Statement (more secure)

$sql = "UPDATE Message SET name = ? , message = ? WHERE message_id = ?";

$stmt = $conn->prepare($sql);
$stmt->bindParam(1, $name);
$stmt->bindParam(2, $message);
$stmt->bindParam(3, $id);
$stmt->execute();