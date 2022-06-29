<?php


$size = (int)readline("Enter the number: ");

$s = "|";
for($i = 0 ; $i <= $size-1; $i++){

    if($i==0 ){
        echo "/";
        for($n = 1 ; $n <= $size/2; $n++){
            echo "^";
        }
        echo "\\";
    }elseif ($i == $size-1){
        echo "\\";
        for($n = 1 ; $n <= $size/2; $n++){
            echo "_";
        }
        echo "/";
    }
    else {
        echo $s;
        for($n = 0; $n <= $size/2; $n++){
            echo " ";
        }

    }
    for($k = 0; $k <= $size/2-1; $k++){
        if( $i == 0){
            echo "_";
        }else if($i == $size-2){
            echo "_";
        }else{
            echo " ";
        }

    }
    if($i==0 ){
        echo "/";
        for($n = 1 ; $n <= $size/2; $n++){
            echo "^";
        }
        echo "\\";
    }elseif ($i == $size-1){
        echo "\\";
        for($n = 1 ; $n <= $size/2; $n++){
            echo "_";
        }
        echo "/";
    }
    else {
        for($n = 0 ; $n <= $size/2; $n++){
            echo " ";
        }
        echo "|";
    }
    echo PHP_EOL;
}