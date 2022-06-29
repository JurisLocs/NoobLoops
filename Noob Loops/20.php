<?php

$size = (int)readline("Enter the number: ");


for($i = 0; $i <= $size; $i++){
    for($n = 1; $n <= $size - $i; $n++){
        echo "$n ";
        if($n != $size -$i){
            echo "* ";
        }
    }

    echo PHP_EOL;
}