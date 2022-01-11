<?php

var_dump($_FILES);

// echo $_FILES['myUpload']['name'];

$destinationFolder = "/opt/lampp/htdocs/php-lessons-2021/8-file-upload/images/";

$filepath = $destinationFolder.$_FILES['myUpload']['name'];

move_uploaded_file($_FILES['myUpload']['tmp_name'], $filepath);



// array(1) { 
//     ["myUpload"]=> array(5) { 
//         ["name"]=> string(16) "space-cow.jpg" 
//         ["type"]=> string(10) "image/jpeg" 
//         ["tmp_name"]=> string(25) "/opt/lampp/temp/php7hGHnf" 
//         ["error"]=> int(0) 
//         ["size"]=> int(119959) 
//     } 
// }