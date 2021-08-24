<?php
//Write a program that creates an array of ten integers. It should put ten random numbers from 1 to 100 in the array.
// It should copy all the elements of that array into another array of the same size.
//
//Then display the contents of both arrays. To get the output to look like this, you'll need a several for loops.
//
//Create an array of ten integers
//Fill the array with ten random numbers (1-100)
//Copy the array into another array of the same capacity
//Change the last value in the first array to a -7
//Display the contents of both arrays


$array = [];

for ($i = 0; $i < 10; $i++){
    $array[] = rand(1, 100);
}
$secondArray = $array;


array_pop($array);
array_push($array, -7);

$arrayFinal = implode(" ", $array);
$secondArrayFinal = implode(" ", $secondArray);

echo $arrayFinal . PHP_EOL;
echo $secondArrayFinal . PHP_EOL;

