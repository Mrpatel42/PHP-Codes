<?php 

echo checkdate(2,29,2020) . "<br><br>";


$date1 = date_create("2013-03-15");
$date2 = date_create("2013-12-12");

$diff =  date_diff($date1, $date2);

echo $diff->days . "days";

echo "<pre>";
print_r($diff);
echo "</pre>";


$date3 = date_create("2013-12-15");
$date4 = date_create("2013-03-12");

$diff1 = date_diff($date3,$date4);

echo $diff1->format("%R%a days") . "<br><br>";

echo $diff1->format("%r%a days") . "<br>";


?>