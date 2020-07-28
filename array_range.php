<?php 

// $newArray = range(0,100,);
// $newArray = range(0,100,10);
// $newArray = range('a','h');
$newArray = range('k','a');

echo "<pre>";
print_r($newArray);
echo "</pre>";


foreach (range('h','a') as $letter) {
    echo $letter . "<br>";
}
?>