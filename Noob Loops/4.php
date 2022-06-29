<?php

$size = (int)readline("Enter the number: ");
$x = readline("Enter the character: ");

for($i = 0 ; $i <= $size-1; $i++){
    for($n = 0 ; $n <= $i; $n++){
        echo $x;
    }
    echo PHP_EOL;
}