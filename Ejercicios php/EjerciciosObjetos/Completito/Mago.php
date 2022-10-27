<?php

//require_once('Personaje.php');

abstract class Mago{

    function defender(){
        echo "!HECHIZO PROTECTOR¡";
    }

    abstract function atacar();
}

class MagoBlanco extends Mago{
    function atacar(){
        echo "!ATAQUE DE LUZ¡";
    }
}

class MagoOscuro extends Mago{
    function atacar(){
        echo "!ATAQUE DE SOMBRA¡";
    }
}

?>