<?php 

class Circulo{

    private $radio;
    private const pi = M_PI;

    function setRadio($radio){
        $this->radio = $radio;
    }

    function getRadio(){
        return $this->radio;
    }

    function getArea(){
        echo (($this->radio * $this->radio) * M_PI);
    }
}

$c = new Circulo();
$c->setRadio(2);
$c->getArea();
?>