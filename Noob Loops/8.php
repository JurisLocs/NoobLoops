<?php

$size = (int)readline("Enter the number: ");
$y = $size;
for($i = 1 ; $i <= $size; $i++){
    for($n = $y ; $n >= 1; $n--){
        echo " ";
    }
    $y--;
    for($k = 0; $k < $i; $k++){
        echo "* ";
    }
    echo PHP_EOL;
}
$y =$y+2;
for($i = $size-1 ; $i >=1; $i--){
    for($n = $y ; $n >= 1; $n--){
        echo " ";
    }
    $y++;
    for($k = 0; $k < $i; $k++){
        echo "* ";
    }
    echo PHP_EOL;
}
