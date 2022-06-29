<?php

$size = (int)readline("Enter the number: ");


$x = 2;

for($i = 1; $i <= $size+1; $i++){
    for($n = 2; $n <=$i; $n++){
        $x = $x / 2;
        echo "$x   ";

    }
    $x = 2 ** $i;
    echo PHP_EOL;
}