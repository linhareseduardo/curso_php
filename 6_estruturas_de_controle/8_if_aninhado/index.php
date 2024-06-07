<?php 

    if(10 > 2){
        
        echo "Entrou no primeiro if <br>";
        
        if("teste" == "teste"){
        
            echo "Entrou no segundo if <br>";
        
        }
    
    }

    $escopo = 10;

    if(10 > 2){
        
        echo "Entrou no primeiro if 2 <br>";
        
        if("teste" != "teste"){
        
            echo "Entrou no segundo if 2<br>";
            echo $escopo;
        
        }else{

            echo "Entrou no segundo else";
        
        }

    }else{
        echo "Entrou no primeiro else";
    }

?>