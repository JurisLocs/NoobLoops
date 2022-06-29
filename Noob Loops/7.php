<?php

$size = (int)readline("Enter the number: ");

$s = "+ ";
for($i = 0 ; $i <= $size-1; $i++){
    if($i==0 || $i == $size-1){
        echo "+ ";
    }else {
        echo "| ";
    }
    for($n = 0; $n <= $size-2; $n++){
        echo "- ";
    }
    if($i==0 || $i == $size-1){
        echo "+ ";
    }else {
        echo "| ";
    }
    echo PHP_EOL;
}