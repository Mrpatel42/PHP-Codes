<?php 

function sum($math,$eng,$sci){
    $s = $math + $eng + $sci ;

    return $s;
}

function percentage($st){
    $per = $st / 3 ;

    echo $per . "%";
}

$total = sum(66,55,75);

percentage($total);

?>