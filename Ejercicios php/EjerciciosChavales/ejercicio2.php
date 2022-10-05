<?php

    $comida = [
        0 => ["Banana",3,56],
        1 => ["Chuleta",1,256],
        2 => ["Pan",1,90],
    ];

    $cal = array_reduce($comida,function($acumulador,$valor){
        return $acumulador + ($valor[1] * $valor[2]);
    });

    print_r($cal);

?>