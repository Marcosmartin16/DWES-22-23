<?php

Class Coche{

    private $matricula;
    private $marca;
    private $carga;

    function setMatricula($matricula){
        $this->matricula = $matricula;
    }

    function getMatricula(){
        return $this->matricula;
    }

    function setMarca($marca){
        $this->marca = $marca;
    }

    function getMarca(){
        return $this->marca;
    }

    function setCarga($carga){
        $this->carga = $carga;
    }

    function getCarga(){
        return $this->carga;
    }

    function pintar(){
        echo "Coche: " . $this->matricula . ", " . $this->marca . " con carga: " . $this->carga;
    }
}
?>