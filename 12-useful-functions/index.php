<!-- 
    1. require vs include
    2. require once vs require
        - nav (repeating elements)
        - db conn
    3. isset
        - check for login status
        - form handling
        - $_SERVER['PHP_SELF']
-->

<?php

require_once('nav.php');

// You can conditionally render pages based on if a form was submitted or not

if (isset($_POST['ok'])) {
    echo "do something with form data";
} else {
    echo "just show the form";
    echo '<form action="index.php" method="POST">
    <input type="text" name="sillyText">
    <input type="submit" value="OK" name="ok">
</form>';
}

?>