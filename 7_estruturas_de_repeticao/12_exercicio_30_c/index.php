<?php 

    $array = [];

    for($i = 0; $i <= 10; $i++){
        $array[$i] = $i + 10;
        if($array[$i] % 2 == 1){
            echo "O valor é : $array[$i] <br>";
        }   
    }


?>