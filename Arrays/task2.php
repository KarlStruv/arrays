<?php
$numbers = [20, 30, 25, 35, -16, 60, -100];

//todo calculate an average value of the numbers



$arrayLength = count($numbers);
$sum = 0;
for ($i = 0; $i < $arrayLength; $i++){
    $sum += $numbers[$i];
}
$average = $sum / $arrayLength;

echo $average . PHP_EOL;