<?php 

$str = "Hello World";


$encodeString = convert_uuencode($str) . "<br>";

echo $encodeString;

$decodeString = convert_uudecode($encodeString);

echo $decodeString;



?>