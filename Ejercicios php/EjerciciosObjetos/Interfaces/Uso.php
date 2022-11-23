<?php

require('BancoMalvado.php');
require('BancoMaloMalisimo.php');
require('BitCoinConan.php');

$numero = rand(1,3);

if($numero == 1){
    $banco = new BancoMalvado();
    $banco->estableceConexion();
    $banco->compruebaSeguridad();
    echo $banco->pagar("qwerty", 20);
}

if($numero == 2){
    $banco2 = new BancoMaloMalisimo();
    $banco2->estableceConexion();
    $banco2->compruebaSeguridad();
    echo $banco2->pagar("qwerty", 20);
}

if($numero == 3){
    $banco3 = new BitCoinConan();
    $banco3->estableceConexion();
    $banco3->compruebaSeguridad();
    echo $banco3->pagar("qwerty", 20);
}

echo $numero;
?>