<?php
$string = "Hello, World! This is a PHP string functions demonstration.";
$length = strlen($string);
echo "1. Length of the string: $length\n";
$replaced = str_replace("World", "PHP", $string);
echo "2. Replaced string: $replaced\n";
$upper = strtoupper($string);
echo "3. Uppercase string: $upper\n";
$lower = strtolower($string);
echo "4. Lowercase string: $lower\n";
$substring = substr($string, 7, 5);
echo "5. Substring: $substring\n";
$position = strpos($string, "PHP");
echo "6. Position of 'PHP' in the string: $position\n";
$reversed = strrev($string);
echo "7. Reversed string: $reversed\n";
?>
