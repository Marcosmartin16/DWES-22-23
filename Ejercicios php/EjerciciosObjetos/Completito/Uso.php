<?php

require('Edificio.php');
require('Humano.php');
require('Mago.php');
require('Objetos.php');

$edificio = new Edificio();
$edificio->setAltura(20);
$edificio->setDescripcion("SOY UN HOSPITAL");
echo "Edificio creado: " . $edificio->getDescripcion() . " con una altura: " . $edificio->getAltura() . "<br>";

$humano = new Humano();

$magoB = new MagoBlanco();

$magoO = new MagoOscuro();

$objeto = new Objeto();
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