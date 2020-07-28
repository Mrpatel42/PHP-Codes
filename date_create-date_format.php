<?php 

$date = date_create("2014-09-18 10:55:00",timezone_open("Asia/Kolkata"));


echo date_format($date,"d/m/Y  h:i:sa") . "<br><br>";


echo date_format($date,"l") . "<br><br>";


echo date_format(date_create("2014-09-18 10:55:00",timezone_open("Asia/Kolkata")),"d/m/Y  h:i:sa");




?>