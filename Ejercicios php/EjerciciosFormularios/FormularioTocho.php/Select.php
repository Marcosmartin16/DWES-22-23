<?php
require_once('Abstracta.php');

class Select extends Abstracta{

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
        if($seleccionado != " "){
            return true;
        }else{
            return false;
        }
    }
}
?>