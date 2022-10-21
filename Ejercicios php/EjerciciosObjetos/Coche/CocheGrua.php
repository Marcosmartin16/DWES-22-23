<?php

require('CocheConRemolque.php');

Class CocheGrua extends Coche{

    private $cocheCargado;

    function cargar($cocheCargado){
        $this->cocheCargado = $cocheCargado;
    }

    function descargar(){
        return $this->cocheCargado;
    }

    function pintar(){
        parent::pintar();
        if($this->cocheCargado == null){
            echo "<br> No lleva ningun coche";
        }else if($this->cocheCargado != null){
            echo "<br> Lleva coche: " . $this->cocheCargado->getMatricula() . ", " . $this->cocheCargado->getMarca() . " con carga: " . $this->cocheCargado->getCarga();
        }
    }
}
?>