<?php 

// $array = [
//          [
//              "id" =>2001,
//              "first_name" =>"jigar",
//              "last_name" =>"patel",
//          ],

//          [
             
//             "id" =>2002,
//             "first_name" =>"ashish",
//             "last_name" =>"talaviya",
//          ],

//          [
             
//             "id" =>2003,
//             "first_name" =>"rama",
//             "last_name" =>"gupta",
//          ]
//          ];


// $newArray = array_column($array,"last_name","id");


// echo "<pre>";
// print_r($newArray);
// echo "</pre>";


$age = ['jigar' =>"22", 'ashish' =>"23", 'darshan' =>"24" ,'harsh' =>"26"];


$newArray = array_chunk($age,2,true);



echo "<pre>";
print_r($newArray);
echo "</pre>";





?>