<?php

    $array = array();
    $numeros = 5;
    $maximo = 20;
    $minimo = 10;

    function aleatorio($a = 0, $b = 0, $c = 100){

        for($i = 0; $i < 10; $i++){
            $array[$i] = rand(0,100);
        }

        for($i = 0; $i < $a; $i++){
            $array[$i] = rand(0,100);
        }

        for($i = 0; $i < $a; $i++){
            $array[$i] = rand($b,100);
        }

        for($i = 0; $i < $a; $i++){
            $array[$i] = rand($b,$c);
        }

        return $array;
    }

    print_r(aleatorio());
    echo "<br>";
    print_r(aleatorio($numeros));
    echo "<br>";
    print_r(aleatorio($numeros, $minimo));
    echo "<br>";
    print_r(aleatorio($numeros, $minimo, $maximo));
?>