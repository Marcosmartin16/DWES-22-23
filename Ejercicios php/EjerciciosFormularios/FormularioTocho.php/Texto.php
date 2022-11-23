<?php
require_once('Validar.php');

class Texto extends Validar{
    
    private $cadena;

    function crear($dato,$max,$min,$valor){
        $this->cadena=$dato;
        if(empty($valor)){
            echo "$dato <input type='text' maxlength='$max' minlength='$min' name='$dato' value='' id='$dato'><br>";
        }else{
            if($this->comprobar($valor,$dato)){
                echo "$dato <input type='text' maxlength='$max' minlength='$min' name='$dato' value='".$valor[$dato]."' id='$dato'><br>";
            }else{
                echo "$dato <input type='text' maxlength='$max' minlength='$min' name='$dato' value='' id='$dato'><br>";
                echo $this->error();

            }
        }
    }

    function comprobar($array,$cadena){
        if(array_key_exists($cadena,$array) && !empty($array[$cadena])){
            return true;
        }else{
            return false;
        }
    }

    function error(){
        return "<p>Error debe introducir $this->cadena </p><br>";
    }
}
?>