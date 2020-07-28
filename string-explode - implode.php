<?php 

$str ="red,green,blue,yellow";

$array = explode(",",$str);

echo "<pre>";
print_r($array);
echo "</pre>";

$a =['red','green','blue','yellow'];

$newArray = implode(" ",$a);

echo $newArray . "<br>";


$a =['red','green','blue','yellow'];

$newArray = join(" ",$a);

echo $newArray;
?>