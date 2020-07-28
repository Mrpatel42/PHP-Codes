<?php 

echo date("d-m-Y",strtotime("now")) . "<br>";
echo date("d-m-Y H:m",strtotime("+5 hours")) . "<br>";
echo date("d-m-Y",strtotime("+1 week")) . "<br>";
echo date("d-m-Y H:m",strtotime("+1 week 3 days 7 hours 5 seconds")) . "<br>";
echo date("d-m-Y",strtotime("next Monday")) . "<br>";
echo date("d-m-Y",strtotime("last sunday")) . "<br>";
echo date("d-m-Y",strtotime("First day of last month")) . "<br>";


echo strftime("%B %d %Y , %X %Z") . "<br><br>";
echo strftime("%B %d %Y , %X %Z",mktime(21,30,0,05,18,2015)) . "<br><br>";
echo strftime("%d/%m/%Y %H:%M:%S",mktime(21,30,0,05,18,2015)) . "<br><br>";
echo gmstrftime("%d/%m/%Y %H:%M:%S",mktime(21,30,0,05,18,2015)) . "<br><br>";


?>