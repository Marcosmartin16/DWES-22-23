<?php


require_once('Personaje.php');

class Humano implements Personaje{

    function atacar(){
        echo "!PUÑETAZO¡";
    }

    function defender(){
        echo "!BLOQUEO¡";
    }
}

?>