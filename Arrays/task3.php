<?php
$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];


//todo check if an array contains a value user entered

$enteredValue = (int)readline("Enter a value: ");

$found = array_search($enteredValue, $numbers);

if($found){
    echo "The searched value exists in the Array :)" . PHP_EOL;
}else{
    echo "Sorry! The entered value does not exist in the Array." . PHP_EOL;
}
