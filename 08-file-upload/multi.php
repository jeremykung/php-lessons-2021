<?php 

    if (isset($_POST['submit'])) {

        echo "\$_FILES Array: <br>";
        var_dump($_FILES);

        // Set this to the folder you want to upload files to
        $destinationFolder = "/opt/lampp/htdocs/php-lessons-2021/8-file-upload/images/";
        
        foreach ($_FILES["pictures"]["error"] as $key => $error) {
            if ($error == UPLOAD_ERR_OK) {

                // See below to see the tmp_name array
                $tmp_name = $_FILES["pictures"]["tmp_name"][$key];

                // What is inside each loop
                echo "<br>KEY: $key";
                echo "<br>Error: $error<br>";
                var_dump($tmp_name);

                // basename() may prevent filesystem traversal attacks;
                // further validation/sanitation of the filename may be appropriate
                $name = basename($_FILES["pictures"]["name"][$key]);

                // move to appropriate folder
                if (move_uploaded_file($tmp_name, "$destinationFolder/$name")) {
                    echo "<br>Upload Successful: $name";
                } else {
                    echo "<br>Upload Error: $name";
                };
            }
        }
    }
    
?>

<!-- if action is set to '', it will refer to itself (this page) -->
<form method='post' action='' enctype='multipart/form-data'>

    <input type="file" name="pictures" multiple>
    <input type='submit' name='submit' value='Upload'>

</form>

<?php

// Example of what the Array of multiple files looks like:

// array(1) { 
//     ["pictures"]=> array(5) { 
//         ["name"]=> array(3) { 
//             [0]=> string(39) "Screenshot from 2021-11-15 19-39-35.png" 
//             [1]=> string(16) "tacos-header.jpg" 
//             [2]=> string(15) "UXUI Rubric.png" 
//         } 
//         ["type"]=> array(3) { 
//             [0]=> string(9) "image/png" 
//             [1]=> string(10) "image/jpeg" 
//             [2]=> string(9) "image/png" 
//         } 
//         ["tmp_name"]=> array(3) { 
//             [0]=> string(25) "/opt/lampp/temp/php1Eo7rS" 
//             [1]=> string(25) "/opt/lampp/temp/php1KHiUU" 
//             [2]=> string(25) "/opt/lampp/temp/php2eaodS" 
//         } 
//         ["error"]=> array(3) { 
//             [0]=> int(0) 
//             [1]=> int(0) 
//             [2]=> int(0) 
//         } 
//         ["size"]=> array(3) { 
//             [0]=> int(297779) 
//             [1]=> int(163549) 
//             [2]=> int(82866) 
//         } 
//     } 
// }

// Reference: https://www.php.net/manual/en/function.move-uploaded-file.php