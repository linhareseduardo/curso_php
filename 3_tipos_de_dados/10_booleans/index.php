<?php 

    //Alguns valores são considerados como falsos: 0, 0.0, "0", [], NULL

    echo true;
    echo "<br>";
    echo false;

    if(true){
        echo "É verdadeiro <br>";
    }

    if(5 > 2){
        echo "É verdadeiro <br>";
    }

    $podeEntrar = true;

    if($podeEntrar){
        echo "O usuário pode entrar";    
    }

?>