<?php 

    if(is_bool(true)){
        echo "é boolean 1 <br>";
    }

    $a = true;

    if(is_bool($a)){
        echo "é boolean 2 <br>";
    }

    if(is_bool(false)){
        echo "é boolean 3 <br>";
    }

    if(0 == false){
        echo "0 é considerado falso <br>";    
    }

    if(0.0 == false){
        echo "0.0 é considerado falso <br>";
    }

    if([] == false){
        echo "[] é considerado falso";
    }

?>