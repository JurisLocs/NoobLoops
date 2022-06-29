<?php

$size = (int)readline("Enter the number: ");
if ($size % 2 == 0){
    $y = ceil($size/2) - 1;
}else{
    $y = floor($size/2);
}
$yConst = $y;

for($i = 0; $i <=$yConst;$i++){
    for($n = 0; $n < $y; $n++){
        echo "-";
    }

    if($i == 0){
        if($size % 2 == 0){
            echo "**";
        }
        else echo "*";
    }else {
        echo "*";
        if($size % 2 == 0){
            for($k = 0; $k < $i*2; $k++){
                echo "-";
            }
        }else{
            for($k = 1; $k < $i*2; $k++){
                echo "-";
            }
        }

        echo "*";
    }

    for($n = 0; $n < $y; $n++){
        echo "-";
    }
    $y--;
    echo PHP_EOL;
}

for($i = $yConst-1; $i >= 0;$i--){
    $y++;
    for($n = 0; $n <= $y; $n++){
        echo "-";
    }

    if($i == 0){
        if($size % 2 == 0){
            echo "**";
        }
        else echo "*";
    }else {
        echo "*";
        if($size % 2 == 0){
            for($k = $i*2; $k >= 1; $k--){
                echo "-";
            }
        }else{
            for($k = 1; $k < $i*2; $k++){
                echo "-";
            }
        }

        echo "*";
    }

    for($n = 0; $n <= $y; $n++){
        echo "-";
    }

    echo PHP_EOL;
}