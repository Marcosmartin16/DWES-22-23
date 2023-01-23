<?php

require("../src/init.php");



if(isset($_COOKIE['recuerdame'])){
    
    $DB->ejecuta("SELECT * FROM tokens WHERE valor = ?", $_COOKIE['recuerdame']);
    $usuario = $DB->obtenDatos();
    
        //echo $usuario[0]['id_usuario'];
    
    $DB->ejecuta("SELECT nombre FROM usuarios WHERE id = ?", $usuario[0]['id_usuario']);
    $usuario = $DB->obtenDatos();
    
        //echo $usuario[0]['nombre'];
    
    $_SESSION['usuario'] = $usuario[0]['nombre'];
    
    print_r($_SESSION['usuario']);
    
}

if(!isset($_SESSION['usuario'])){
    header("Location: login.php");
    die();
}

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
    <h1>FORMULARIO PRIVADO EDITAR PERFIL</h1>
    <a href="cambiarContra.php">Cambiar contra</a>
</body>
</html>