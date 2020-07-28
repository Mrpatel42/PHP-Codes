<?php 

$str = "Hello 'Jigar Patel'";

echo $str . "<br>";

$newStr = addslashes($str);

echo stripslashes($newStr) . "<br>";


$color = "Red Yellow Blue Green";

echo $color . "<br>";

// $newColor = addcslashes($color,"A..Z");

$newColor = addcslashes($color,"a..z");

echo $newColor . "<br>";

// echo stripcslashes($newColor);

echo stripslashes($newColor);



?>