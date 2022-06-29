<?php

$size = (int)readline("Enter the number: ");


for($i = 1; $i <= $size -2 ; $i++){
    for($n = 1; $n <= $size - 2; $n++){
        if($i % 2 != 0){
            echo "*";
        }else{
            echo  "-";
        }
    }
    echo "\\ /";

    for($n = 1; $n <= $size - 2; $n++){
        if($i % 2 != 0){
            echo "*";
        }else{
            echo  "-";
        }
    }
    echo PHP_EOL;
}
for($n = 1; $n <= $size - 1; $n++){
   echo " ";

}
echo "@";
for($n = 1; $n <= $size - 1; $n++){
    echo " ";

}
echo PHP_EOL;
for($i = 1; $i <= $size - 2 ; $i++){
    for($n = 1; $n <= $size - 2; $n++){
        if($i % 2 != 0){
            echo "*";
        }else{
            echo  "-";
        }
    }
    echo "/ \\";

    for($n = 1; $n <= $size - 2; $n++){
        if($i % 2 != 0){
            echo "*";
        }else{
            echo  "-";
        }
    }
    echo PHP_EOL;
}