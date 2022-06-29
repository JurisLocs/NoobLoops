<?php

$size = (int)readline("Enter the number: ");
$type = readline("Select the type (a/b/c/d): ");

for($i = 0; $i <= $size-1; $i++){
    if($type == "a"){
        for($n=0;$n<= $i;$n++){
            echo $n+1 ." ";
        }
    }
    if($type == "b"){
        for($n=0;$n<= $i;$n++){
            echo "  ";
        }
        for($n=1;$n<= $size-$i;$n++){
            echo "$n ";
        }
    }

    if($type == "c"){
        for($n=1;$n<= $size-$i;$n++){
            echo "  ";
        }
        for($n=0;$n<= $i;$n++){
            echo $n+1 .  " ";
        }

    }

    if($type == "d"){
        for($n=$size; $n >= $i+1;$n--){
            echo $n-$i . " ";
        }
    }

    echo PHP_EOL;
}
