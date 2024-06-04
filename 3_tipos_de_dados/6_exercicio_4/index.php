<?php 

    echo 4.15;
    echo "<br>";    
    echo 12.12;
    echo "<br>";

    $c = -78.999;

    echo $c;
    echo "<br>";
    
    if(is_float($c)){
        echo "$c é float e float também pode ser negativo";
    }

    if(is_int($c)){
        echo "$c é inteiro";
    }
?>