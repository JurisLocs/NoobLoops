<?php

$size = (int)readline("Enter the number: ");

$s = "* ";
for($i = 0 ; $i <= $size-1; $i++){
    if($i==0 || $i == $size-1){
        for($n = 0 ; $n <= $size-1; $n++){
            echo $s;
        }
    }else {
        echo $s;
        for($n = 1 ; $n <= $size-2; $n++){
            echo "  ";
        }
        echo $s;
    }
    echo PHP_EOL;
}