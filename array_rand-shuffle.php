<?php 

// $color =['red','green','yellow','blue','purpale','pink'];


// $newArray = array_rand($color,2);

// echo "<pre>";
// print_r($newArray);
// echo "</pre>";


// echo ($color[$newArray[0]]) . "<br>";
// echo ($color[$newArray[1]]);


$color =['red','green','yellow','blue','purpale','pink'];

shuffle($color);


echo "<pre>";
print_r($color);
echo "</pre>";

?>