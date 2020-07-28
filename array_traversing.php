<?php 

$food =['banana','apple','grapes','lemon'];


echo "<b> current : </b>" . current($food) . "<br>";

echo "<b> key : </b>" . key($food) . "<br>";

echo "<b> pos : </b>" . pos($food) . "<br>";


next($food);
echo "<b> current : </b>" . current($food) . "<br>";


next($food);
echo "<b> current : </b>" . current($food) . "<br>";


prev($food);
echo "<b> current : </b>" . current($food) . "<br>";


end($food);
echo "<b> current : </b>" . current($food) . "<br>";


echo "<pre>";
print_r(each($food));
echo "</pre>";


reset($food);
echo "<b> current : </b>" . current($food) . "<br>";


?>