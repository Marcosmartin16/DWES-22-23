<?php
/*
require('Edificio.php');
require('Humano.php');
require('Mago.php');
require('Objetos.php');
*/

/*
sin name space

spl_autoload_register(function ($class) {
    $classPath = "./";
    //echo $class . " Creado ";
    
    require("$classPath${class}.php");
});
*/

spl_autoload_register(function ($class) {
    $classPath = "../src/";
    $file = str_replace('\\', '/', $class);
    require("$classPath${file}.php");
});

$edificio = new Completito\Edificio();
$edificio->setAltura(20);
$edificio->setDescripcion("SOY UN HOSPITAL");
echo "Edificio creado: " . $edificio->getDescripcion() . " con una altura: " . $edificio->getAltura() . "<br>";

$humano = new Completito\Humano();

$magoB = new Completito\MagoBlanco();

$magoO = new Completito\MagoOscuro();

$objeto = new Completito\Objetos();
$objeto->setPeso(20);
$objeto->setDescripcion("SOY UNA PIEDRA");
echo "Objeto creado: " . $objeto->getDescripcion() . " con un peso de: " . $objeto->getPeso() . "<br>";


$magoB->atacar();
$magoO->defender();
$magoO->atacar();
$humano->defender();
$humano->atacar();
$magoB->defender();

?>