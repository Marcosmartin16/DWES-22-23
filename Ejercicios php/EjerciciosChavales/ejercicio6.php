<?php 

    $numeros = array();

    for($i = 0; $i <= 20; $i++){
        $random = rand(1,100);
        array_push($numeros,$random);
    }

    echo "numeros aleatorios <br> \n";
    print_r($numeros);

    sort($numeros, $sort_flags = SORT_NUMERIC);

    echo "<br> numeros aleatorios ordenados <br> \n";
    print_r($numeros);

    $salida = array_slice($numeros, 10);
    $salida2 = array_slice($numeros, 0, 10);

    echo "<br> primera mitad numeros aleatorios <br> \n";
    print_r($salida2);

    echo "<br> segunda mitad numeros aleatorios <br> \n";
    print_r($salida);

    $final = array_merge($salida, $salida2);

    echo "<br> numeros aleatorios en total <br> \n";
    print_r($final);
?>