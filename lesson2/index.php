<!-- 
1. Arrays
    - Indexed (numbers as keys)
    - Associative (strings ask keys)
-->

<?php

$band[] = "Jack Johnson";
$band[] = "Nujabes";
$band[] = "Coldplay";

// echo $band[1];

$provinces['BC'] = "British Columbia";
$provinces['AB'] = "Alberta";
$provinces['SK'] = "Saskatchewan";

// echo $provinces['BC'];

// var_dump($band);
// print_r($band);

$jpBands = array('clammbon', 'ichiko aoba', 'spangle call lili line');
// var_dump($jpBands);

$pas = array(
    'Head of School' => 'Pamela Chu', 
    'Curriculum Director' => 'Jeff Buscher',
    'Assistant' => 'Maiko Lin'
);

$students = ['Livia', 'Catherine', 'Benjamin', 'Daniel', 'Jim', 'Albert'];

echo "<ul>";
foreach($students as $student) {
    echo "<li>$student</li>";
}
echo "</ul>";

$name = "Thomas";
echo in_array($name, $students);



$food = [
    "tw" => array('pork rice', 'rice noodle', 'cabbage'),
    "us" => array('burger', 'fries', 'soda'),
    "jp" => array('sushi', 'ramen', 'soba')
];

// var_dump($food['tw'][1]);