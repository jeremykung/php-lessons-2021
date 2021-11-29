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

    </div>
    <form action="process.php" method="post">
        <input type="text" name="name" placeholder="name">
        <input id="message-input" type="text" name="message" placeholder="message">
        <input id="submit-btn" type="submit" value="Post">
    </form>
</body>
</html>