<?php

$size = (int)readline("Enter the number: ");

for($i = 0; $i <= $size-1; $i++){
    for($n = 0; $n <= $size*3; $n++){
        echo "-";
    }
    echo "*";
    for($n = 1; $n <= $i; $n++){
        echo "-";
    }
    echo "*";
    for($n = 1; $n <= $size - $i; $n++){
        echo "-";
    }
    for($n = 1; $n <= $size-2; $n++){
        echo "-";
    }
    echo PHP_EOL;
}

for($i = 0; $i <= $size/2-1; $i++){
    for($n = 0; $n <= $size*3; $n++){
        echo "*";
    }
    echo "*";


    for($n = 0; $n <= $size - 2; $n++){
        echo "-";
    }
    echo "*";
    for($n = 0; $n <= $size-2; $n++){
        echo "-";
    }
    echo PHP_EOL;
}
for($i = 0; $i <= $size/2-1; $i++){
    for($n = 0; $n <= $size*3 - $i; $n++){
        echo "-";
    }
    echo "*";


    for($n = 0; $n <= $size - 2 + $i*2; $n++){
        if($i == floor($size/2)-1){
            echo "*";
        }else{
            echo "-";
        }

    }
    echo "*";
    for($n = 0; $n <= $size-2 - $i; $n++){
        echo "-";
    }
    echo PHP_EOL;
}

