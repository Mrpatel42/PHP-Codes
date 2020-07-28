<?php 


$color = ["Red","Green","Blue","Yellow","Brown"];

$food =["apple","banana",];


// array_splice($color,1,2);
// array_splice($color,1,count($color));
// array_splice($color,2,0,$food);
array_splice($color,count($color),0,$food);

echo "<pre>";
print_r($color);
echo "<pre>";




?>