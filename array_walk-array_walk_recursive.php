<?php 
$vaggie =['1' =>'carrot', '2' =>'Tomatoes'];

$fruits = [$vaggie,'a' =>'orange', 'b' =>'banana', 'c' =>'lemon', 'd' =>'apple', 'e' =>'graphs'];


// array_walk($fruits,"myFunction","is a key of");
array_walk_recursive($fruits,"myFunction","is a key of");


function myFunction($value,$key,$pera){
echo "$key $pera $value <br>";
};



?>