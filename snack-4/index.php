<?php

$numbers = [];
$arrayNumbers = [];

for($i = 0; $i < 50; $i++) {
    $randomNumbers = rand(1, 50);
    if(!in_array($randomNumbers, $arrayNumbers, true)) {
        $arrayNumbers[] = $randomNumbers;
    } 
}

for($i = 0; $i < 15; $i++) {
    if(!in_array($arrayNumbers[$i], $numbers, true)) {
        $numbers[] = $arrayNumbers[$i];
    }
}

var_dump($numbers)
?>