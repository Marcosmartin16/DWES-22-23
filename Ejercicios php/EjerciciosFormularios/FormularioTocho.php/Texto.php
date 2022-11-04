<?php

class Texto{

    private $cadena = "";

    function comprobar($cadena){
        if(!empty($cadena) && $cadena != " "){
            return $this->cadena = $cadena;
        }else{
            return "Error en el aparatado";
        }
    }
}
?>