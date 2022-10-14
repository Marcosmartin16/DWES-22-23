<?php

    $array = array();
    $numeros = 5;
    $maximo = 20;
    $minimo = 10;

    function aleatorio($a, $b, $c){
        

        for($i = 0; $i < $a; $i++){
            $array[$i] = rand(0,100);
        }

        /*for($i = 0; $i < $a; $i++){
            $array[$i] = rand(0,$b);
        }*/   

        /*for($i = 0; $i < $a; $i++){
            $array[$i] = rand($c,$b);
        } */  

        return $array;
    }

    echo aleatorio($numeros);
    /*echo aleatorio($numeros,$maximo);
    echo aleatorio($numeros,$maximo,$minimo);*/
?>