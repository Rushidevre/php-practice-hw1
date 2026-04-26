<?php
$str1 = 'This is a car';
$str2 = "Tesla Model S";

echo $str1 . "<br>";
echo $str2 . "<br>";

// Concatenation
$car = "BMW";
$price = 50000;
echo $car . " costs " . $price . "<br>";

// strpos
$text = "This is a Tesla car";
echo strpos($text, "Tesla");

// str_replace
echo str_replace("Tesla", "BMW", $text);

// String functions
echo strlen($text) . "<br>";
echo strtolower($text) . "<br>";
echo strtoupper($text) . "<br>";
echo trim(" Hello ") . "<br>";
echo substr($text, 0, 10);
?>