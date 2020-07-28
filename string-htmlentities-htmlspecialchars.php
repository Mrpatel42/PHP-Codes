<?php 

$str = "A 'quote' is <b>bold</b>";


echo $str . "<br><br>";


echo htmlentities($str);

$newStr = '<a href="https://www.jigarpatel.net">Jigar Patel Website</a>';

echo $newStr . "<br><br>";


//$htmlent = htmlentities($newStr, ENT_QUOTES);

// echo htmlentities($newStr, ENT_NOQUOTES);

 $htmlent = htmlspecialchars($newStr, ENT_QUOTES);

// echo htmlspecialchars($newStr, ENT_NOQUOTES);

echo $htmlent . "<br>";

// echo html_entity_decode($htmlent);

echo htmlspecialchars_decode($htmlent) . "<br>";

echo "<pre>";
print_r(get_html_translation_table(HTML_ENTITIES));
echo "</pre>";


echo "<pre>";
print_r(get_html_translation_table(HTML_SPECIALCHARS));
echo "</pre>";
?>