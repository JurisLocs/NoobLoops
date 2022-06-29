<?php

$size = (int)readline("Enter the number: ");

for($i = 0; $i <= $size; $i++){

    if($i == 0){
        if($size >= 10){
            echo " ";
        }
        echo " * |  ";
        for($n = 1; $n <= $size; $n++){
            echo "$n   ";
        } echo PHP_EOL;
        for($n = 1; $n <= $size; $n++){
            echo "-----";
        }
    }else{
        if($i <10){
            echo " ";
        }
        echo " $i |  ";
        for($n = 1; $n <= $size; $n++){
            if($n*$i <10){
                echo " ";
            }
            echo $n*$i ."  ";
    }
    }

    echo PHP_EOL;
}