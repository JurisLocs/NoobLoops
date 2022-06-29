<?php

$size = (int)readline("Enter the number: ");

for($i = 0; $i <= $size-1; $i++){
    if($i % 2 != 0){
        echo " ";
    }
    for($n=0;$n<= $size;$n++){
        echo "# ";
    }
echo PHP_EOL;
}
