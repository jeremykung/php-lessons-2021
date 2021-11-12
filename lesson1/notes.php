<!--

Forms
1. action
2. methods
    - POST
    - GET
3. superglobals
4. retrieving

-->

<form action="handleForm.php" method="POST">
    <!-- username -->
    <h3>Username</h3>
    <input type="text" name="username">
    <!-- password -->
    <h3>Password</h3>
    <input type="password" name="password">
    <!-- <input type="password" name="password2" placeholder="confirm password"> -->
    <!-- email -->
    <h3>Email</h3>
    <input type="email" name="email">
    <!-- job -->
    <h3>Your Job</h3>
    <select name="job">
        <option value="student">student</option>
        <option value="teacher">teacher</option>
        <option value="office">office</option>
    </select>
    <!-- gender -->
    <h3>Gender</h3>
    <input type="radio" name="gender" value="male" id="male">
    <label for="male">male</label>
    <input type="radio" name="gender" value="female" id="female">
    <label for="female">female</label>
    <input type="radio" name="gender" value="other" id="other">
    <label for="other">other</label>
    <!-- choose os -->
    <h3>Which do you use?</h3>
    <input type="checkbox" name="os" id="windows">
    <label for="windows">windows</label>
    <input type="checkbox" name="os" id="mac">
    <label for="mac">mac</label>
    <input type="checkbox" name="os" id="linux">
    <label for="linux">linux</label>
    <!-- terms -->
    <h3>Terms & Agreement</h3>
    <input type="checkbox" name="terms" id="terms" required>
    <label for="terms">I agree that I'm a noob</label>
    <!-- submit -->
    <br>
    <input type="submit" value="OK">
</form>

<?php
// echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";

$browser = get_browser(null, true);
print_r($browser);