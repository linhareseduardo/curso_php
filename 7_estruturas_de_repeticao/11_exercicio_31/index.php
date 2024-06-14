<?php 

    $array = [];

    for($i = 1; $i <=10; $i++){
     
        $array[$i-1] = $i;
        //echo $array[$i] . "<br>";    
    
    }

    print_r($array);

    $array2 = [];

    for($i = 1; $i <= 10; $i++){

        array_push($array2,$i);
    
    }

    print_r($array2);
    

    
?>