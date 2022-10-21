<?php

    //require('CocheConRemolque.php');
    require('CocheGrua.php');

    $coche = new Coche();
    $coche->setMatricula(1000);
    $coche->setMarca("BMW");
    $coche->setCarga(30);

    $coche2 = new Coche();
    $coche2->setMatricula(1002);
    $coche2->setMarca("PORCHE");
    $coche2->setCarga(40);

    $coche_remolque = new CocheConRemolque();
    $coche_remolque->setMatricula(1001);
    $coche_remolque->setMarca("RENAULT");
    $coche_remolque->setCarga(30);
    $coche_remolque->setCapacidad(200);

    $coche_grua = new CocheGrua();
    $coche_grua->setMatricula(1003);
    $coche_grua->setMarca("RENAULT");
    $coche_grua->setCarga(20);
    $coche_grua->cargar($coche2);

    $coche_grua2 = new CocheGrua();
    $coche_grua2->setMatricula(1004);
    $coche_grua2->setMarca("RENAULT");
    $coche_grua2->setCarga(20);

    $coche_grua = new CocheGrua();
    $coche_grua->setMatricula(1003);
    $coche_grua->setMarca("RENAULT");
    $coche_grua->setCarga(20);
    $coche_grua->cargar($coche2);

    $array = [$coche, $coche_remolque, $coche_grua, $coche_grua2];

    array_walk($array, function($item, $clave){
        echo "<div>" . $item->pintar() . "</div><br>";
    });
?>
