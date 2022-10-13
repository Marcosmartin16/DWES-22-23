<?php

    $numero = 0;

    $primo = false;

    function esPrimo($numero){
        for($i = 2; $i < $numero; $i++){
            if(($numero % $i) == 0){
                return false;
            }
        }
        return true;
    }

    do{

        $numero = rand(1,100);

        if(esPrimo($numero)){
            $primo == true;
        }else{
            $primo == false;
            echo "$numero<br>";
        }

    }while($numero != 17 || $primo == true)
    
    
?>