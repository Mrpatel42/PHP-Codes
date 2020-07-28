<?php 

date_default_timezone_set("Asia/Kolkata");

echo date_default_timezone_get() . "<br><br>";

$tz = timezone_open("Europe/paris");

echo timezone_name_get($tz) . "<br>";

echo "<pre>";
print_r(timezone_location_get($tz));
echo "</pre>";


echo "<pre>";
print_r(timezone_identifiers_list(16));
echo "</pre>";






?>