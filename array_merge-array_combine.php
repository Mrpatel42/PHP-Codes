<?php 

// $food = ["a" =>"orange", "b" =>"apple", "c" =>"guava", "d" =>"banana"];

// $vagiee = [ "b" => ["color" => ["red","green"]], 
//           "e" =>"pea" ,55,68];

// $newArray = array_merge($food,$vagiee);
// $newArray = $food + $vagiee;
// $newArray = array_merge_recursive($food,$vagiee);

// echo "<pre>";
// print_r($newArray);
// echo "</pre>";


$color =["Red","Green","Blue"];

$value = [55,66,88];

$newArray =array_combine($color,$value);

echo "<pre>";
print_r($newArray);
echo "</pre>";

?>