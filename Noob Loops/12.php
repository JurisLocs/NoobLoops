<?php

$size = (int)readline("Enter the number: ");

$s = "* ";
for($i = 0 ; $i <= $size-1; $i++){
    if($i==0 || $i == $size-1){
        for($n = 0 ; $n <= $size-1; $n++){
            echo "**";
        }
    }else {
        echo $s;
        for($n = 1 ; $n <= $size-2; $n++){
            echo "//";
        }
        echo " *";
    }
    for($k = 0; $k <= $size; $k++){
        if( $i == floor(($size-1)/2)){
            echo "|";
        }else
        echo " ";
    }
    if($i==0 || $i == $size-1){
        for($n = 0 ; $n <= $size-1; $n++){
            echo "**";
        }
    }else {
        echo $s;
        for($n = 1 ; $n <= $size-2; $n++){
            echo "//";
        }
        echo " *";
    }
    echo PHP_EOL;
}