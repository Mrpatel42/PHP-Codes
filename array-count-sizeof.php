<?php 

$food = array('orange', 'banana', 'apple', 'grapes' );

// // echo count($food);
// echo sizeof($food);


// $food =   array(

//                'fruits' => array('orange', 'banana', 'apple', 'grapes'),
//                'veggie' => array('carrot', 'collard', 'pea')
//  );


//  echo count($food['fruits'],1);

$len = count($food);

for ($i=0; $i < $len ; $i++) { 
    echo $food[$i] . "<br>";
}
?>