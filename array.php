<?php 

// $colors = array("red","green","yellow","blue");

// echo $colors[0] . "<br>";
// echo $colors[1]. "<br>";
// echo $colors[2]. "<br>";
// echo $colors[3];


// $colors = ["red","green","yellow","blue"];

// // echo $colors[0] . "<br>";
// // echo $colors[1]. "<br>";
// // echo $colors[2]. "<br>";
// // echo $colors[3];
// echo "<pre>";
// print_r($colors);
// echo "</pre>";


// $colors[0] = "red";
// $colors[1] = "green";
// $colors[2] = "yellow";
// $colors[3] = "blue";

// echo $colors[2];


$colors = ["red","green","yellow","blue"];
echo "<ul>";
for ($i=0; $i < 4 ; $i++) { 
    echo "<li> $colors[$i]  </li>";

}
echo "</ul>"
?>