<?php

require('UsuarioA.php');
require('UsuarioP.php');

//USUARIO NORMAL
$usuario1 = new Usuario("Marcos", "Martin", "FOOTBALL");

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

//USUARIO PREMIUM
$usuarioP = new UsuarioP("Martin", "Martin", "FOOTBALL");

$usuarioP->introducirResultado("victoria");
echo "<p>" . $usuarioP->imprimirInfo() . "</p>";

$usuarioP->introducirResultado("victoria");
echo "<p>" . $usuarioP->imprimirInfo() . "</p>";

$usuarioP->introducirResultado("victoria");
echo "<p>" . $usuarioP->imprimirInfo() . "</p>";

//USUARIO ADMINISTRADOR
$usuarioA = new UsuarioA("Socram", "Martin", "FOOTBALL");

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