<?php 

class Circulo{

    private $radio;
    private const PI = M_PI;

    //le paso un float
    function setRadio(float $radio){
        $this->radio = $radio;
    }

    //devuelve un float
    function getRadio():float{
        return $this->radio;
    }

    function getArea(){
        echo (($this->radio * $this->radio) * M_PI);
    }
}
?>