<?php 

$food = ["a" =>"orange", "b" =>"apple", "c" =>"guava", "d" =>"banana"];


// $newArray = array_keys($food);
// $newArray = array_key_first($food);
// $newArray = array_key_last($food);

// echo "<pre>";
// print_r($newArray);
// echo "</pre>";
 

$newArray = array_key_exists("a",$food);

if ($newArray) {
    echo "Key Exists";
}else {
    echo "Key does not exists!";
}

?>