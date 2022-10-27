<?php

require('UsuarioA.php');

$usuario1 = new Usuario("Marcos", "Martin", "FOOTBALL");
/*$usuario1->setNombre();
$usuario1->setApellido();
$usuario1->setDeporte();*/

$usuario1->introducirResultado("victoria");
echo "<p>" . $usuario1->imprimirInfo() . "</p>";

$usuario1->introducirResultado("victoria");
echo "<p>" . $usuario1->imprimirInfo() . "</p>";

$usuario1->introducirResultado("victoria");
echo "<p>" . $usuario1->imprimirInfo() . "</p>";

$usuario1->introducirResultado("victoria");
echo "<p>" . $usuario1->imprimirInfo() . "</p>";

$usuario1->introducirResultado("victoria");
echo "<p>" . $usuario1->imprimirInfo() . "</p>";

$usuario1->introducirResultado("victoria");
echo "<p>" . $usuario1->imprimirInfo() . "</p>";


//$usuarioP = new UsuarioP();

$usuarioA = new UsuarioA("Socram", "Martin", "FOOTBALL");
/*$usuarioA->setNombre();
$usuarioA->setApellido();
$usuarioA->setDeporte();*/

$usuarioA->crearPartido();

$usuarioA->introducirResultado("victoria");
echo "<p>" . $usuarioA->imprimirInfo() . "</p>";

$usuarioA->introducirResultado("victoria");
echo "<p>" . $usuarioA->imprimirInfo() . "</p>";

$usuarioA->introducirResultado("victoria");
echo "<p>" . $usuarioA->imprimirInfo() . "</p>";

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

</body>
</html>