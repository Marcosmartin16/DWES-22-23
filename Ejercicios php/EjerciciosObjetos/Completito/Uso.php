<?php

require('Edificio.php');
require('Humano.php');
require('Mago.php');
require('Objetos.php');

$edificio = new Edificio();
$edificio->setAltura(20);
$edificio->setDescripcion("SOY UN HOSPITAL");

$humano = new Humano();
$humano->atacar();
$humano->defender();

$magoB = new Mago();
$humano->atacar();
$humano->defender();

$magoO = new Mago();

$objeto = new Objeto();
$edificio->setPeso(20);
$edificio->setDescripcion("SOY UNA PIEDRA");
?>