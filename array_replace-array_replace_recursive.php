<?php 

// $food = array('orange', 'banana', 'apple','55', 'grapes' );

// $veggie = array('carrot', 'collard', 'pea');

// $newArray = array_replace($food,$veggie);


// echo "<pre>";
// print_r($newArray);
// echo "</pre>";

$array1 = array('a' => array("red","green"),'b' =>array("yellow","blue") );

$array2 = array('a' => array("orange","apple"),'b' =>array("pea") );

$newArray3 = array_replace_recursive($array1,$array2);

echo "<pre>";
print_r($newArray3);
echo "</pre>";
?>