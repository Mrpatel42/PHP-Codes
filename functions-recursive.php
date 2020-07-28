<?php 

// function factorial($n){
//     if ($n == 0) {
//         return 1;
//     }else {
//         return ($n * factorial($n -1));
//     }
// }

// echo factorial(5);

function num($a){
    if ($a <= 5) {
        echo "$a <br>";

        num($a + 1);
    }
    
}
num(1);
?>