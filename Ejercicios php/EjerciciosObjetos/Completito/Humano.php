<?php
namespace Completito;
require_once('Personaje.php');

class Humano implements Personaje{

    function atacar(){
        echo "HUMANO: !PUÑETAZO¡ <br>";
    }

    function defender(){
        echo "HUMANO: !BLOQUEO¡ <br>";
    }
}

?>