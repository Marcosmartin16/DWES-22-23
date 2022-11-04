<?php

class Select{

    private $array = [];
    private $seleccionado;

    function crear($array){
        array_walk(
            $array,
            function($op, $k){
                echo "<option value='$op'>$op</option>";
            }
        );
    }

    function comprobar($seleccionado){
        if($seleccionado != ""){
            return $this->seleccionado = $seleccionado;
        }else{
            return "ERROR";
        }
    }
}
?>