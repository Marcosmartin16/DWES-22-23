<?php

    require('CuentaBancaria.php');

    $milloneti = new CuentaBancaria("Milloneti", 1000000);

    $agapito = new CuentaBancaria("Agapito", 30345);

    $pobreton = new CuentaBancaria("Pobreton", -10000);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>saldo inicial<h1>
    <p>Pobre: <?=$pobreton->saldo()?><br>Agapito: <?= $agapito->saldo()?><br>Milloneti: <?=$milloneti->saldo()?></p>
        
    <h4>Agapito: ingresa 1200.<?php $agapito->ingresar(1200)?> Saldo actual <?=$agapito->saldo()?></h4>
    
    
    <h4>Milloneti: Retira 100 veces 1000.<?php for($i = 0; $i < 100; $i++){
        $milloneti->retirar(1000);}?> saldo actual <?=$milloneti->saldo()?></h4>
    
    <h1>saldo despues de primeros movimientos<h1>
    <p>Pobre: <?=$pobreton->saldo()?><br>Agapito: <?= $agapito->saldo()?><br>Milloneti: <?=$milloneti->saldo()?></p>

    <h3>Pobreton ha hackeado y une su cuenta con la de milloneti</h3>
    <?php $pobreton->unirCon($milloneti)?>
    <h4> Saldo actual de pobreton <?=$pobreton->saldo()?> saldo   actual de milloneti <?=$milloneti->saldo()?></h4>

    <h3>Agapito transfiere la mitad de su dinero a Milloneti</h3>
    <?php $agapito->transferirA($agapito->saldo()/2, $milloneti)?>
    <h4> Saldo actual de Agapito <?=$agapito->saldo()?> saldo actual de milloneti <?=$milloneti->saldo()?></h4>

    <?=$milloneti->mostrar()?>
    <?=$agapito->mostrar()?>
    <?=$pobreton->mostrar()?>

</body>
</html>