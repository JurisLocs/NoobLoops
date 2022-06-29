<?php

$size = (int)readline("Enter the number: ");

for($i = 0 ; $i <= $size/2; $i++){

    for($n = 0; $n <= $i; $n++){
        echo "*";
    }
    for($n = $size-$i*2; $n >= 1; $n--){
        echo ".";
    }
    for($n = 0; $n <= $i; $n++){
        echo "*";
    }
    echo PHP_EOL;
}


for($i = 0 ; $i <= $size/2; $i++){
    for($n = 0; $n <= $i; $n++){
        echo ".";
    }
    for($n = $size-$i*2; $n >= 1; $n--){
        echo "*";
    }
    for($n = 0; $n <= $i; $n++){
        echo ".";
    }
    echo PHP_EOL;
}