<?php

$arrayNumbers = [];
$numCreated = 15;

for($i = 0; $i < $numCreated; $i++) {
    $randomNumbers = rand(1, 100);
    if(!in_array($randomNumbers, $arrayNumbers)) {
        $arrayNumbers[] = $randomNumbers;
    } else {
        $i--;
    }
}

var_dump($arrayNumbers);
?>