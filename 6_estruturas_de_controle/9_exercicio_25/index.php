<?php 

    $valor1 = 10;
    $valor2 = 20;
    $valor3 = "Eduardo";
    $valor4 = "Jackeline";

    if(is_numeric($valor1)){
        $valor5 = $valor1 * 2; 
        echo $valor5 . "<br>";
    
        if($valor5 > 100){
            echo "Valor maior que 100 <br>";        
        }else{
            echo "Valor menor que 100 <br>";
        }

    }else{
        echo "Não é um valor numérico <br>";
    }

    if(is_numeric($valor2)){
        $valor5 = $valor2 * 2; 
        echo $valor5 . "<br>";
    
        if($valor5 > 100){
            echo "Valor maior que 100 <br>";        
        }else{
            echo "Valor menor que 100 <br>";
        }

    }else{
        echo "Não é um valor numérico <br>";
    }

    if(is_numeric($valor3)){
        $valor5 = $valor3 * 2; 
        echo $valor5 . "<br>";
    
        if($valor5 > 100){
            echo "Valor maior que 100 <br>";        
        }else{
            echo "Valor menor que 100 <br>";
        }

    }else{
        echo "Não é um valor numérico <br>";
    }

    if(is_numeric($valor4)){
        $valor5 = $valor4 * 2; 
        echo $valor5 . "<br>";
    
        if($valor5 > 100){
            echo "Valor maior que 100 <br>";        
        }else{
            echo "Valor menor que 100 <br>";
        }

    }else{
        echo "Não é um valor numérico <br>";
    }
  
?>