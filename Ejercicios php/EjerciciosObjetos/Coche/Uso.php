<?php

    require('CocheConRemolque.php');

    $coche = new CocheConRemolque();
    $coche->setMatricula(123456);
    $coche->setMarca("AUDI");
    $coche->setCarga(20);
    $coche->setCapacidad(15);
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
    <p><?=$coche->pintar()?></p>
</body>
</html>