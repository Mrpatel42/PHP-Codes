<?php 

function compare($a,$b){
    if ($a === $b) {
        return 0;
    }
    return ($a > $b)? 1 : -1;
}


function compareValue($a,$b){
    if ($a === $b) {
        return 0;
    }
    return ($a > $b)? 1 : -1;
}


$a1 = ["a" =>"orange", "b" =>"apple", "c" =>"guava", "d" =>"banana"];

$a2 = ["a" =>"orange", "f" =>"Graphs", "d" =>"Charry"];


// $newArray = array_intersect($a1,$a2);
// $newArray = array_intersect_key($a1,$a2);
// $newArray = array_intersect_assoc($a1,$a2);
// $newArray = array_intersect_uassoc($a1,$a2,"compare");
// $newArray = array_intersect_ukey($a1,$a2,"compare");
// $newArray = array_uintersect($a1,$a2,"compare");
// $newArray = array_uintersect_assoc($a1,$a2,"compare");
$newArray = array_uintersect_uassoc($a1,$a2,"compare","compareValue");

echo "<pre>";
print_r($newArray);
echo "</pre>";





?>