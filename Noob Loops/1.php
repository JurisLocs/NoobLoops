<?php

$size = (int)readline("Enter the number: ");

for($i = 0 ; $i <= $size-1; $i++){
    for($n = 0 ; $n <= $size-1; $n++){
        echo "*";
    }
    echo PHP_EOL;
}