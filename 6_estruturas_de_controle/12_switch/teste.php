<?php 

function compararNumeros($valor1, $valor2){
    if($valor1 > $valor2){
        echo "$valor1 é maior que $valor2";
    }else if ($valor1 < $valor2) {
        echo "$valor2 é maior que $valor1";
    }else{
        echo "Os valores são iguais";
    }
}

echo compararNumeros(2,2);

?>