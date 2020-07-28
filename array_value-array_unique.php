<?php 

$a1 = ["a" =>"orange", "b" =>"apple", "c" =>"orange", "d" =>"banana"];



// $newArray = array_values($a1);
$newArray = array_unique($a1);

echo "<pre>";
print_r($newArray);
echo "</pre>";



?>