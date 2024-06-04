<?php 

    $x = 10;

    echo "$x global <br>";

    function teste(){
        $x = 5;

        echo "$x local <br>";
    }

    function testando(){
        $x = 12;
        echo "$x local 2 <br>";
    }

    echo teste();
    echo "$x global <br>";
    echo teste();
    $x = 99;
    echo "$x global <br>";
    teste();
    testando();

?>