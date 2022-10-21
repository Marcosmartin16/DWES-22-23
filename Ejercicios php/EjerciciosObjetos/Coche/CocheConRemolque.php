<?php

require('Coche.php');

Class CocheConRemolque extends Coche{

    private $capacidad;

    function setCapacidad($capacidad){
        $this->capacidad = $capacidad;
    }

    function getCapacidad(){
        return $this->capacidad;
    }

    function pintar(){
        parent::pintar();
        echo " y remolque: " . $this->capacidad;
    }
}
?>