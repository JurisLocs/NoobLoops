<?php

$size = (int)readline("Enter the number: ");
$type = (string)readline("Select the type (a/b/c/d): ");


    if($type == "a"){
        for($i = 0; $i <= $size-1; $i++){
            for($n=1;$n<= $size-$i;$n++){
                echo "  ";
            }
            for($n=0;$n<= $i*2;$n++){
                echo "# ";
            }
        }
        echo PHP_EOL;
    }
    if($type == "b"){
        for($i = 0; $i <= $size-1; $i++){
            for($n=0;$n<= $i;$n++){
                echo "  ";
            }
            for($n=2;$n<= $size*2-$i*2;$n++){
                echo "# ";
            }
        }
        echo PHP_EOL;
    }
    if($type == "c"){
        for($i = 0; $i <= $size-1; $i++){
            for($n=1;$n<= $size-$i;$n++){
                echo "  ";
            }
            for($n=0;$n<= $i*2;$n++){
                echo "# ";
            }
            echo PHP_EOL;
        }
    for($i = 1; $i <= $size-1; $i++){
        for($n=0;$n<= $i;$n++){
            echo "  ";
        }
        for($n=2;$n<= $size*2-$i*2;$n++){
            echo "# ";
        }
        echo PHP_EOL;
    }

    }
    if($type == "d"){
        for($i = 0; $i <= $size-1; $i++){
            for($n=1;$n<= $size-$i;$n++){
                echo "# ";
            }
            for($n=2;$n<= $i*2;$n++){
                echo "  ";
            }
            if($i == 0){
                for($n=1;$n<= $size-1;$n++){
                    echo "# ";
                }
            }else{
                for($n=1;$n<= $size-$i;$n++){
                    echo "# ";
                }
            }


            echo PHP_EOL;
        }
        for($i = 1; $i <= $size-1; $i++){
            for($n=0;$n<= $i;$n++){
                echo "# ";
            }
            for($n=3;$n<= $size*2-$i*2;$n++){
                echo "  ";
            }
            if($i == 0){
                echo "#";
            }else{
                for($n=1;$n<= $i;$n++){
                    echo "# ";
                }
            }
            echo PHP_EOL;
            }
}


