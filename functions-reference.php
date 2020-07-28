<?php 

function first($num){

    $num += 10;
}


function second(&$num){

    $num += 10;
}

$number = 10;

first ($number);

echo "Original Value is $number <br>";

second($number);


echo "Original Value is $number <br>";



?>