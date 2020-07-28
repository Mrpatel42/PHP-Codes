<?php 

$str = "jigar patel";

$array = str_split($str,2);

echo "<pre>";
print_r($array);
echo "</pre>";


$a = "ashish patel";

$newStr = chunk_split($a,2,"--");

echo $newStr;

?>