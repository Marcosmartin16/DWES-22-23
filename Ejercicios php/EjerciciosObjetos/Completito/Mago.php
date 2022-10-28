<?php

//require_once('Personaje.php');

abstract class Mago{

    function defender(){
        echo "MAGO: !HECHIZO PROTECTOR¡ <br>";
    }

    abstract function atacar();
}
?>