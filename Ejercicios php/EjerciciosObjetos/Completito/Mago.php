<?php
namespace Completito;
require_once('Personaje.php');

abstract class Mago implements Personaje{

    function defender(){
        echo "MAGO: !HECHIZO PROTECTOR¡ <br>";
    }

    abstract function atacar();
}
?>