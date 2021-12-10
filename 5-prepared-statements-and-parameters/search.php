<?php

// DB CONNECTION
try {
    $conn = new PDO("mysql:host=localhost;dbname=message_board", 'root', '');
    echo "<div>Connection established</div>";
} catch (PDOException $e) {
    echo "<div>Error: " . $e . "</div>";
}

// 1. Data from your form
$username = "Bob";

// 2. Prepare your statement
$sql = "SELECT * FROM Message WHERE name = ?";

// 3. Moves statement to DB and stores PDOStatement object in $stmt var
$stmt = $conn->prepare($sql);

// 4. Send variable over to complete prepared statement
$stmt->bindParam(1, $username);

// 5. Execute statement on server
$stmt->execute();

// 6. Results are returned and stored on the already existing PDOStatement object ($stmt)

// 7. Loop through your results
while ($row = $stmt->fetch()) {
    $name = $row['name'];
    $message = $row['message'];
    echo $name."<br>";
    echo $message."<br>";
}

// --------------------------------------------------------------

// LIKE operator
// When searching for parts of a string, use the LIKE operator in SQL
$sql = "SELECT * FROM Message WHERE name = ?";

// You need to mutate your form data into a SQL value with %% signs (see SQL LIKE operator documentation if you forgot how to use LIKE)
$username = "%$username%";

// Then you continue from step 4 above

// --------------------------------------------------------------

// Multiple variables

// When working with multiple form variables, add additional '?' in your prepared statement
// Then you can use bindParam() to map variables to the proper '?'
// For example, the code below binds whatever is in the $message variable into the second '?' of the prepared statement
$stmt->bindParam(2, $message)

// Good luck!