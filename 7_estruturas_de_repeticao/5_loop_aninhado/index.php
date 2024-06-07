<?php 

    $i = 0;

    while($i <= 10){
        echo "Loop externo $i <br>";
        $j = 0;
        while($j <= 10){
            echo "Loop interno $j <br>";
            $j++;
        }
        $i++;     
    }

?>