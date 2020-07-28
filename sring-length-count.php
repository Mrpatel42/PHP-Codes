<?php 

$str = "Jigar Patel";

// echo strlen($str);
echo str_word_count($str);

$newStr ="Jig ar Patel";

// $a = str_word_count($newStr,1);
$a = str_word_count($newStr,2);

echo "<pre>";
print_r($a);
echo "</pre>";


$new = "Hellow world. The world is nice";

// echo substr_count($new,"world");
echo substr_count($new,"world",1,20);

?>