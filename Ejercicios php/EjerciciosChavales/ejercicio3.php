<?php

    $array1 = [1,2,3,4,5,6,7,8,9,10];

    $array2 = [11,12,3,14,15,6,7,8,19,20];

    //array con los numeros q se repiten en ambos arrays
    $array3 = array_intersect($array1, $array2);

    print_r($array3);

    //array con los numeros distintos entre ambos arrays
    $array4 = array_diff_key($array1,$array3);

    print_r($array4);

    //reemplazar array interseccion y el array de distintos para crear un array con todos los numeros unicos
    $union = array_replace($array3, $array4);

    print_r($union);
?>