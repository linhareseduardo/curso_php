<?php 

    $array = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

    $i = 0;

    while($i < count($array)){

        $numeroAtual = $array[$i];
        
        if($numeroAtual == 30 || $numeroAtual == 40){
            $i++;
            continue;
        }

        echo "O valor é $array[$i] <br>";
        $i++;
    }

?>