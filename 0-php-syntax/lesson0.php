<?php

$age = 31;

echo $age++;

/* 
0. include() vs require() vs include_once/require_once()
    - The require() function is identical to include(), except that it handles errors differently. If an error occurs, the include() function generates a warning, but the script will continue execution. The require() generates a fatal error, and the script will stop.
    - The require_once() statement is identical to require() except PHP will check if the file has already been included, and if so, not include (require) it again.
1. Echo & Print (print returns a value of 1, echo has no return value)
2. Comments <!-- or //
3. Variables
    - declared with $name
    - called with $name
4. Strings & Concatenation
    - . to concatenate
    - " vs ' (In PHP, values enclosed within single quotation marks will be treated literally, whereas those
      within double quotation marks will be interpreted.)
    - String Functions (https://www.php.net/manual/en/ref.strings.php)
5. Numbers & Operators
    +    Addition
    –    Subtraction
    *    Multiplication
    /    Division
    %    Modulus
    ++   Increment
    ––   Decrement
6. Constants (cannot change)
    - define("NAME", value);
7. Escapes
    \”    Double quotation mark
        \’    Single quotation mark
    \\    Backslash
    \n    Newline
    \r    Carriage return
    \t    Tab
    \$    Dollar sign

Practice:
Create an working example of each of the concepts we learned today. Echo them out to an HTML page and provide an explanation of each.

*/

// define("ABC", "the alphabet");
// echo "I'm learning " . ABC . "<br>";

// $city = "Forest City";
// $country = "Decentraland";
// echo "$city, $country <br>";
// echo '$city, $country <br>';

// // echo "<br>";

// print $_SERVER['SCRIPT_FILENAME'];