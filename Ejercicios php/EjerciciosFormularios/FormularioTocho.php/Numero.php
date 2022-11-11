<?php
require_once('Abstracta.php');

class Numero extends Abstracta
{

    private $numero;

    function crear($dato,$max,$min,$valor){
        echo "$dato <input type='number' size='1' max='$max' min='$min' name='$dato' value='$valor' id='$dato'><br>";
    }

    function comprobar($numero){
        if(!empty($numero)){
            return true;
        }else{
            return false;
        }
    }

    /*public function setX($valor){
        $this->valor=$valor;
    }

    public function getX(){
        return $this->valor;
    }*/
}
?>