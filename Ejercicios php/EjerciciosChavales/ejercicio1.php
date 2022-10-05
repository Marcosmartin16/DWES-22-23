<?php 
    $personas = [
        ["Jorge",1],
        ["Bea",0],
        ["Paco",1],
        ["Amparo",1],
    ];

    //escupe cada cosa  =>  $item es la palabra o numero y el $clave es el indice
    array_walk($personas,function($item, $clave){
        echo (($item[1]==0)?'Señora':'Señor') . " " . $item[0] . " ";
    });

    //lo introduce en un array q puedes mostrar o trabajar con el
    /*$array_señor = array_map(function($item, $clave){
        return (($item[1]==0)?'Señora':'Señor') . " " . $item[0] . " ";
    }, $personas);

    print_r($array_señor);*/

    $a = array_filter($personas, function($val){
        return $val[1] == 0;
    });

    print_r($a);

?>
