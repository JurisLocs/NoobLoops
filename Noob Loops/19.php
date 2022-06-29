<?php

$size = (int)readline("Enter the number: ");


for($i = 0; $i <= $size; $i++){
    $x = $size;
    for($n = 1; $n <=$size - $i; $n++){
        echo "$x  ";
        $x = $x - 1;
    }
    for($n = 1 ; $n <= $i ; $n++){
        echo "   ";
    }
    for($n = 1 ; $n <= $i ; $n++){
        echo "   ";
    }
    for($n = 1; $n <=$size - $i; $n++){
        echo "$n  ";
    }
    echo PHP_EOL;
}