<?php 


$olddate = mktime(0,0,0,9,18,2019);

$date = getdate($olddate);

echo $date['month']. " - " .$date['year'];


echo "<pre>"; 
print_r(getdate($olddate));
echo "</pre>";


echo "<pre>"; 
print_r(gettimeofday());
echo "</pre>";

$date1 = gettimeofday();

echo $date1['sec'] . "<br>";

echo gettimeofday(true);


$olddate1 = mktime(0,0,0,03,15,2015);

echo "<pre>"; 
print_r(localtime($olddate1,true));
echo "</pre>";


echo "<pre>"; 
print_r(localtime(time(),true));
echo "</pre>";

?>