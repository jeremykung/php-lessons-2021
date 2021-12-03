<?php
// READ

// $result = $conn->query("SELECT * FROM `Message`");

$stmt = $conn->prepare("SELECT * FROM `Message`");
$stmt->execute();

$result = $stmt->fetchAll();
var_dump($result);


foreach($result as $item) {
    echo "<br>";
    $name = $item["name"];
    $message = $item["message"];
    echo $name . "<br>";
    echo $message . "<br>";
}   