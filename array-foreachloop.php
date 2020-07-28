<?php 

$colors = ["red" => 10,"green" => 20,"blue" => 30,"yellow" => 40];

echo "<ul>";
foreach ($colors as $key => $value) {
    echo "<li>$key = $value</li>";
}
echo "</ul>";

?>