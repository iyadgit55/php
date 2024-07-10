<?php
$originalArray = array("apple", "banana", "cherry", "date");
$newItem = "orange";
$insertPosition = 2;
$index = $insertPosition - 1;
array_splice($originalArray, $index, 0, $newItem);
echo "Original Array after insertion: <br>";
print_r($originalArray);
?>
