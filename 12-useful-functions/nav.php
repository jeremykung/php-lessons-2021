<nav>
    <a href="Home">Home</a>
    <a href="About">About</a>
    <a href="Contact">Contact</a>

    <?php
        session_start();

        if(isset($_SESSION['username'])) {
            echo "<a href='Log IN'>Log IN</a>";
        } else {
            echo "<a href='Log OUT'>Log OUT</a>";
        }
    ?>
</nav>