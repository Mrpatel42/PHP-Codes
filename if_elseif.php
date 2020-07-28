<?php 

$per=200;

if ($per >=80 and $per <=100) {
    
    echo "You are in Merit.";
}elseif ($per >=60 and $per <=80) {
    
    echo "You are in Ist Division.";
}elseif ( $per >=45 and $per <=60) {
    
    echo "You are in IIst Division.";
}elseif ( $per >=33 and $per <=45) {
    
    echo "You are in IIIst Division.";
}elseif ( $per < 33) {
    
    echo "You are Fail";
}else {
    echo "Please Enter Valid Percentage"; 
}


?>