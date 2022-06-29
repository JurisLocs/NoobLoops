<?php

$size = (int)readline("Enter the number: ");

for($i = 0; $i <= $size-2; $i++){
    for($n = 0; $n <= $size/2-1; $n++){
        echo ".";
    }
    echo "*";
    for($n = 1; $n <= $size-2; $n++){
        if($i == 0){
            echo "*";
        }
        else echo ".";
    }
    echo "*";
    for($n = 0; $n <= $size/2-1; $n++){
        echo ".";
    }
echo PHP_EOL;
}
for($i = 0; $i <= $size-1; $i++){

    if($i == 0){
        for($n = 0; $n <= $size/2-1; $n++){
        echo "*";
        }
    }
    for($n = 1; $n <= $i; $n++){
        echo ".";
    }


    echo "*";
    if($i == 0){
        for($n = 1; $n <= $size-2; $n++){
            echo ".";
        }
    }else{
        for($n = 0; $n <= $size + $size/2 - $i*2; $n++){
            echo ".";
        }
    }
    if($i != $size-1){
        echo "*";
    }




    for($n = 1; $n <= $i; $n++){
        echo ".";
    }
    if($i == 0){
        for($n = 0; $n <= $size/2-1; $n++){
            echo "*";
        }
    }
    echo PHP_EOL;
}