<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Message Board</title>
</head>
<body>
    <header>Message Board</header>
    <div class="messages">
        <?php
            // CONNECT TO DATABASE
            try {
                $conn = new PDO("mysql:host=localhost;dbname=message_board", 'root', '');
                echo "Connected successfully<br>";
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }

            // READ

            $result = $conn->query("SELECT * FROM `Message`");
            var_dump($result);
            
            // $stmt = $conn->prepare("SELECT * FROM `Message`");
            // $stmt->execute();
            // $result = $stmt->fetchAll();



            foreach($result as $item) {
                echo "<br>";
                $name = $item["name"];
                $message = $item["message"];
                echo "<h3>$name</h3>";
                echo "<p>$message</p>";
            }


        ?>
    </div>
    <form action="process.php" method="post">
        <input type="text" name="name" placeholder="name">
        <input id="message-input" type="text" name="message" placeholder="message">
        <input id="submit-btn" type="submit" value="Post">
    </form>
</body>
</html>