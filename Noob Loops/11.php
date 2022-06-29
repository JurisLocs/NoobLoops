<?php

$size = (int)readline("Enter the number: ");
$letter = "A";
for($i = 0 ; $i <= $size-1; $i++){
    for($n = 0 ; $n <= $i; $n++){
        echo $letter ." ";
    }
    $letter++;
    echo PHP_EOL;
}