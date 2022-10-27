<?php

//require_once('Personaje.php');

abstract class Mago{

    function defender(){
        echo "MAGO: !HECHIZO PROTECTOR¡ <br>";
    }

    abstract function atacar();
}

class MagoBlanco extends Mago{
    function atacar(){
        echo "MAGO BLANCO: !ATAQUE DE LUZ¡ <br>";
    }
}

class MagoOscuro extends Mago{
    function atacar(){
        echo "MAGO OSCURO: !ATAQUE DE SOMBRA¡ <br>";
    }
}

?>