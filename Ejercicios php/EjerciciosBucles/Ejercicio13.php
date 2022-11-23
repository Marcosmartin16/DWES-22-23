<?php

    function generaSelect(array $datos, int $sele = -1){ ?>
        <select name = 'ciudad'>
            <?php
                array_walk($datos, function($value, $key){
                    $sel = ($value == $selected) ? 'selected' : '';
                    echo "<option value = '$value' $sel>$key</option>";
                }, $selected);             
            ?> 
    <?php } 

    $opciones = [
        "Madrid" => 28,
        "Sevilla" => 17,
        "Caceres" => 56
    ];

    generaSelect($opciones, 56);

?>