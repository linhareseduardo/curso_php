<?php 

    $a = (int) "testando";
    echo gettype($a);
    echo "<br>";
    echo $a;
    echo "<br>";

    $b = (int) 12.9;
    echo gettype($b);
    echo "<br>";
    echo $b;
    echo "<br>";

    $c = (int) true;
    echo gettype($c);
    echo "<br>";
    echo $c;
    echo "<br>";
    

    $d = (int) [5, 2, 3];
    echo gettype($d);
    echo "<br>";
    echo $d;
    echo "<br>";

?>