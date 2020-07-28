<?php 

// $color = ["Red","Green","Blue","Yellow","Brown"];

// $color = ['a' =>"Red", 'b' =>"Green", '44' =>"Blue", 'd' =>"Yellow", 'e' =>"Brown"];

$color = ['1' =>"Red", '2' =>"Green", '3' =>"Blue", '4' =>"Yellow", '5' =>"Brown"];

$newArray =array_slice($color,-3,3,true);

echo "<pre>";
print_r($newArray);
echo "</pre>";

?>