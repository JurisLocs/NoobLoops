<?php

$size = (int)readline("Enter the number: ");
$y = $size;
for($i = 0 ; $i <= $size; $i++){
    for ($n = $y; $n >= 0; $n--){
        echo " ";
    }
    for($k = 1; $k <=$i; $k++){
        echo "*";
    }
    echo "|";
    for($k = 1; $k <=$i; $k++){
        echo "*";
    }
    for ($n = $y; $n >= 0; $n--){
        echo " ";
    }
    $y--;

    echo PHP_EOL;
}

