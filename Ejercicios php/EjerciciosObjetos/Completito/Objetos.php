<?php
namespace Completito;

class Objetos{

    private $peso;
    private $descripcion;

    function setPeso($peso){
        $this->peso = $peso;
    }

    function getPeso(){
        return $this->peso;
    }

    function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }

    function getDescripcion(){
        return $this->descripcion;
    }
}
?>