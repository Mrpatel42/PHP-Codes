<?php 

$x=10;
$y=20;

function num(){
    global $x , $y;
    $x = $x + $y;
}

num();

echo $x;



?>