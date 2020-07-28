<?php 

// $color =['a' =>'red', 'b' =>'green','c' =>'blue'];

// extract($color);

// echo "Value of a : $a <br>";
// echo "Value of b : $b <br>";
// echo "Value of c : $c <br>";


$a = "yellow";
$color =['a' =>'red', 'b' =>'green','c' =>'blue'];

// extract($color,EXTR_SKIP);
// extract($color,EXTR_OVERWRITE);
// extract($color,EXTR_PREFIX_SAME,"test");
extract($color,EXTR_PREFIX_ALL,"test");


echo "Value of a : $a <br>";
echo "Value of a : $test_a <br>";
echo "Value of b : $test_b <br>";
echo "Value of c : $test_c <br>";

?>