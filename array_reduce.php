<?php 

// function myFunction($n,$m){
//     return $n . "-" .$m;
// }

// $a =['banana','apple','orange'];


// $newArray =array_reduce($a,'myFunction','graphs');

// echo "<pre>";
// print_r($newArray);
// echo "</pre>";



function myFunction($n,$m){
    return $n + $m;
}

$a =[1,2,3,4,5,6,7,8,9];


$newArray =array_reduce($a,'myFunction',1);

echo "<pre>";
print_r($newArray);
echo "</pre>";

?>