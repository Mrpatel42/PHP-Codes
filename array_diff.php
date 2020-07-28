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

$a2 = ["a" =>"orange","e" =>"charry","d" =>"apple","f" =>"banana"];


// $newArray = array_diff($a1,$a2);
// $newArray = array_diff_key($a1,$a2);
// $newArray = array_diff_assoc($a1,$a2);
// $newArray = array_diff_uassoc($a1,$a2,"compare");
// $newArray = array_udiff_assoc($a1,$a2,"compare");
// $newArray = array_diff_ukey($a1,$a2,"compare");
// $newArray = array_udiff($a1,$a2,"compare");
$newArray = array_udiff_uassoc($a1,$a2,"compare","compareValue");


echo "<pre>";
print_r($newArray);
echo "</pre>";

?>