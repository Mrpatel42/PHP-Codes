<?php 

echo "Time & Date : " . date("d-m-Y / h:i:sa") . "<br><br>";

echo date("l",mktime(0,0,0,10,15,2004)) . "<br><br>";

echo date("d-m-Y / h:i:sa / e",mktime(0,0,0,10,15,2004)) . "<br><br>";

date_default_timezone_set("Asia/Kolkata");


echo date("d-m-Y / h:i:sa / e",mktime(0,0,0,10,15,2004)) . "<br><br>";




?>