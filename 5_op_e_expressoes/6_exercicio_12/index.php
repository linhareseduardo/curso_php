<?php 
    $valor1 = 10;
    $valor2 = 5;
    $valor3 = 6; 

    $resultadoOperacaoSoma = $valor1 + $valor2 + $valor3;
    $resultadoOperacaoSubtr = $valor1 - $valor3 - $valor2;
    $resultadoOperacaoMult = $valor1 * $valor2 * $valor3;
    $resultadoOperacaoDiv = $valor2 / $valor3;
    $resultadoOperacaoCompleta = ($valor1 - $valor3) / $valor3 * ($valor2 - $valor1);
    echo $resultadoOperacaoSoma;
    echo "<br>";
    echo $resultadoOperacaoSubtr;
    echo "<br>";
    echo $resultadoOperacaoMult;
    echo "<br>";
    echo $resultadoOperacaoDiv;
    echo "<br>";
    echo $resultadoOperacaoCompleta;
    echo "<br>";

?>