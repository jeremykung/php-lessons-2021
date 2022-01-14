<!-- Cookies
1. Creating cookies
2. Deleting cookies
3. Reading cookie data
-->

<form action="index.php" method="post">
    <input type="text" name="data">
    <input type="submit" name="submit">
</form>
    
<?php

if (isset($_POST['submit'])) {
    echo "yes it is there";
};


setcookie("user", "8763", time() + 3600);