<?php 

echo "<pre>";
print_r(date_parse("2015-03-15 10:30:25.5"));
echo "</pre>";

$date = date_parse("2015-03-15 10:30:25.5");

echo $date['day'];


echo "<pre>";
print_r(date_parse_from_format("d.n.Y","11152015"));
echo "</pre>";








?>