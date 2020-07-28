<?php 


// function square($a){
//     return strtoupper($a);
// }

// $fruit = ['a' =>'banana', 'b' =>'apple', 'c' =>'graphs', 'd' =>'lemon'];
  

// $newArray =array_map('square',$fruit);




// echo "<pre>";
// print_r($newArray);
// echo "</pre>";



function square($m,$n){
    return "$m for $n";
}


$a =[1,2,3,4,5,6,7,8,9];
$b =['apple','banana','graphs','lemon'];
$newArray =array_map('square',$a,$b);

echo "<pre>";
print_r($newArray);
echo "</pre>";
?>