<?php

$size = (int)readline("Enter the number: ");
$direction = readline("Select direction (right/left): ");
$empty = readline("Is it empty? (Y/n): ");

$s = "*";
for($i = 0 ; $i <= $size-1; $i++){

    if($direction === "right"){
        for($n = 0; $n < $size-$i; $n++){
            echo " ";
        }
    }
    if($direction === "left"){
        for($k = 0; $k <= $i; $k++){
            echo " ";
        }
    }
    if($empty == "y"){
        if($i==0 || $i == $size-1){
            for($n = 0 ; $n <= $size-1; $n++){
                echo "*";
            }
        }else {
            echo "*";
            for($n = 1 ; $n <= $size-2; $n++){
                echo " ";
            }
            echo "*";
        }
    }else {
        for($n = 0 ; $n <= $size-1; $n++){
            echo "*";
        }
    }


    echo PHP_EOL;
}