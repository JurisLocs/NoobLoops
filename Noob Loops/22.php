<?php

$size = (int)readline("Enter the number: ");
$direction = readline("Enter direction: ");

if($direction == "r"){
    for($i = 0; $i <= $size-1; $i++){
        for($n = 1 ; $n <= $i ; $n++){
            echo "  ";
        }
        for($n = 1; $n <=$size - $i; $n++){
            echo "*";

        }
        echo PHP_EOL;
    }

    for($i = 2; $i <= $size; $i++){
        for($n = 1 ; $n <= $size -$i ; $n++){
            echo "  ";
        }
        for($n = 1; $n <=$i; $n++){
            echo "*";

        }
        echo PHP_EOL;
    }
}

if($direction == "l"){
    for($i = 0; $i <= $size-1; $i++){
        for($n = 1 ; $n <= $size -$i ; $n++){
            echo " ";
        }
        for($n = 1; $n <=$size - $i; $n++){
            echo "*";

        }
        echo PHP_EOL;
    }

    for($i = 2; $i <= $size; $i++){

        for($n = 1 ; $n <= $i ; $n++){
            echo " ";
        }
        for($n = 1; $n <=$i; $n++){
            echo "*";

        }
        echo PHP_EOL;
    }
}
