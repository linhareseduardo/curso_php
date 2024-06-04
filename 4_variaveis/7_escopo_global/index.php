<?php 

    $teste = "asd";

    echo "$teste global 1 <br>";    

    if(5 > 1){
        $teste = "kaká";
        echo "$teste if <br>";
    }

    echo "$teste global 2 <br>";

    function funcao(){
        $teste = "xasda";
        echo "$teste local <br>";
    }
    
    funcao();

    function testandoGlobal(){
        global $teste;

        echo "$teste global função <br>";
    }

    testandoGlobal();

    function testandoGlobal2(){
        global $teste;
        $teste = "Eduardo";

        echo "$teste global função 2";

    }

    testandoGlobal2();
?>