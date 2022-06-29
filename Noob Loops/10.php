<?php

$size = (int)readline("Enter the number: ");
$y = $size;
$fibonacci = 1;
for($i = 1 ; $i <= $size; $i++){
    for($n = $y ; $n >= 1; $n--){
        echo " ";
    }
    $y--;
    for($k = 0; $k < $i; $k++){

        echo "$fibonacci ";

    }
    echo PHP_EOL;
}
