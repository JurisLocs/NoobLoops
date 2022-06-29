<?php

$size = (int)readline("Enter the number: ");
$type = readline("Select the type (a/b/c/d): ");

for($i = 0; $i <= $size-1; $i++){
    if($type == "a"){
        for($n=0;$n<= $i;$n++){
            echo "# ";
        }
    }
    if($type == "b"){
        for($n=1;$n<= $size-$i;$n++){
            echo "# ";
        }
    }
    if($type == "c"){
        for($n=0;$n<= $i;$n++){
            echo "  ";
        }
        for($n=1;$n<= $size-$i;$n++){
            echo "# ";
        }
    }
    if($type == "d"){
        for($n=1;$n<= $size-$i;$n++){
            echo "  ";
        }
        for($n=0;$n<= $i;$n++){
            echo "# ";
        }

    }
    echo PHP_EOL;
}
