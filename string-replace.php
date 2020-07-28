<?php 

$a = "Hello WORLD. The world is nice";


$find = ["Hello","world"];
$replace = ["Hi","earth"];

//echo str_replace("world","earth",$a);

//echo str_ireplace("world","earth",$a);

//echo str_replace($find, $replace, $a);

echo str_ireplace($find,$replace,$a);


$color =["red","blue","yellow","green"];

echo "<pre>";
print_r(str_replace("red","pink",$color));
echo "<pre>";

$str ="Hello world. The world is nice";

echo substr_replace($str,"earth",6,10) . "<br>";

$string ="Hello world. The world is nice";

$array =["Hello" =>"Hi","world" =>"earth"];

echo strtr($string,$array);
?>