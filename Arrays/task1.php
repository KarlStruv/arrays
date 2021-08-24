<?php

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2165, 1457, 2456
];
echo "Original numeric array: ";
$originalArray = implode(" ", $numbers);
echo $originalArray . PHP_EOL;

echo "Sorted string array: ";
sort($numbers);
$sortedArray = implode(" ", $numbers);
echo $sortedArray . PHP_EOL;



$words = [
    "Java",
    "Python",
    "PHP",
    "C#",
    "C Programming",
    "C++"
];


echo "Original string array: ";
$originalStringArray = implode(" ", $words);
echo $originalStringArray . PHP_EOL;

echo "Sorted string array: ";
sort($words);
$sortedStringArray = implode(" ", $words);
echo $sortedStringArray . PHP_EOL;

