<?php

$size = (int)readline("Enter the number: ");


for($i = 0 ; $i <= ceil($size/2); $i++){
    for($n = 1 ; $n <= $i; $n++){
        echo ".";
    }
    echo "*";
    for($k = 0; $k < $size - $i; $k++){
        echo ".";
    }
    echo "*";
    echo PHP_EOL;
}
