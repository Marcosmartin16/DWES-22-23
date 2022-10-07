<?php 

    $tares = [
        "Pelar mandarinas",
        "Comer comida",
        "Beber bebida",
        "Recoger titulo",
        "Cobrar salario",
        "Barrer casa",
        "Fregar casa",
    ];

    $personas = [
        "p1",
        "p2",
        "p3",
    ];


    $rand_keys = array_rand($tares, 7);

    function relleno($clave, $clave2){
        return $clave2 = $clave2 + $clave;
    }

    $array_horario = array_map("relleno", $tares, $personas);

    print_r($array_horario);
?>