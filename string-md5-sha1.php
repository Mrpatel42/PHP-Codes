<?php 
  

$str = "Jigar patel";

echo "Password :" . $str . "<br><br>";

echo "md5 HAX :" . md5($str) . "<br><br>";

echo "md5 binary :" . md5($str,TRUE) . "<br><br>";

echo "sha1 HAX :" . sha1($str) . "<br><br>";

echo "sha1 binary :" . sha1($str,TRUE) . "<br><br>";

if (md5($str) == "fd19cc60b979dfe34e2e68db018f5f42") {
    echo "PASSWORD IS MATCH";
}


?>