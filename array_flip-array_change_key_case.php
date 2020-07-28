<?php 

$a = [
    "JIGAR" => 22,
    "darshan" => 23,
    "ashish" => 24,
    "lalu" => 25
];

// $newArray = array_flip($a);
// $newArray = array_change_key_case($a,CASE_LOWER);
$newArray = array_change_key_case($a,CASE_UPPER);
echo "<pre>";
print_r($newArray);
echo "</pre>";




?>