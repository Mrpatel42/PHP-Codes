<?php 

$str = "Hello <b>World</b> The World is <i>Beautiful</i>";

echo $str . "<br><br>";

echo strip_tags($str) . "<br><br>";


$Str = " Hello World The World is Beautiful";

echo $Str . "<br><br>";

echo wordwrap($Str,4,"<br>",TRUE);



?>