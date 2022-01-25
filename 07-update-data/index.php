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

            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {

                $id = $row["message_id"];
                $name = $row["name"];
                $message = $row["message"];
            
                echo "<div class='message'>
                    <p>$id</p>
                    <h2>$name</h2>
                    <div>$message</div>
                    <a href='edit.php?id=$id'>Edit</a>
                    <a href='message.php?id=$id'>Delete</a>
                </div>
                ";
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