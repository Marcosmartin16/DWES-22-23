<?php
namespace Completito;

class Edificio{

    private $altura;
    private $descripcion;
    
    function setAltura($altura){
        $this->altura = $altura;
    }

    function getAltura(){
        return $this->altura;
    }

    function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }

    function getDescripcion(){
        return $this->descripcion;
    }
}
?>