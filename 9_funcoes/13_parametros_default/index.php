<?php 

    function teste($a = "teste"){
        echo "O valor de A é: $a <br>"; 
    }

    teste();
    teste("DUDU");

    function testando($b, $a = "x"){
        echo "O valor de a é: $a e de b é: $b <br>";
    }

    testando("1");
    testando("1","2");

?>