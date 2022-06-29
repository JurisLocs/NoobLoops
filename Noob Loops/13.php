<?php

$size = (int)readline("Enter the number: ");
if ($size % 2 == 0){
    $y = floor($size/2) - 1;
}else{
    $y = floor($size/2);
}


for($i = 1 ; $i <= ceil($size/2); $i++){
    for($n = $y ; $n >= 1; $n--){
        echo "-";
    }
    if($size % 2 == 0){
        for($k = 0; $k < $i*2; $k++){
            echo "*";
        }
    }else{
        for($k = 1; $k < $i*2; $k++){
            echo "*";
        }
    }

    for($n = $y ; $n >= 1; $n--){
        echo "-";
    }
    $y--;
    echo PHP_EOL;
}
for($i = 1 ; $i <= ceil($size/2); $i++){
    for($n = 0 ; $n <= $size-1; $n++){
        if($n==0 || $n == $size-1){
            echo "|";
        }else {
            echo "*";
        }
    }
    echo PHP_EOL;
}

