<?php
require_once('Abstracta.php');

class Texto extends Abstracta{

    private $cadena = "";

    function comprobar($cadena){
        if(!empty($cadena) && $cadena != " "){
            return true;
        }else{
            return false;
        }
    }
}
?>