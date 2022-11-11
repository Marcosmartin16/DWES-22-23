<?php
require_once('Abstracta.php');

class Texto extends Abstracta{

    private $cadena = "";

    function crear($dato,$max,$min,$valor){
        echo "$dato <input type='text' maxlength='$max' minlength='$min' name='$dato' value='$valor' id='$dato'><br>";
    }

    function comprobar($cadena){
        if(!empty($cadena) && $cadena != " "){
            return true;
        }else{
            return false;
        }
    }
}
?>