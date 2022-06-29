<?php

$size = (int)readline("Enter the number: ");

$x = 0;
$y = $size+1;

for($i = 0 ; $i <= $size; $i++){
    for($n = 1 ; $n <= $i; $n++){
        echo ".";
    }
    for($k = 0; $k <= $size - $i; $k++){
        echo "*";
    }
    echo PHP_EOL;
}
