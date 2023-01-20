<?php

require("../src/init.php");

$error = 0;

if(isset($_SESSION['usuario'])){
    $DB->ejecuta("SELECT * FROM usuarios");
    $usuarios = $DB->obtenDatos();
}

if(isset($_COOKIE['recuerdame'])){

    $DB->ejecuta("SELECT * FROM tokens WHERE valor = ?", $_COOKIE['recuerdame']);
    $usuario = $DB->obtenDatos();

    $DB->ejecuta("SELECT nombre FROM usuarios WHERE id = ?", $usuario[0]['id_usuario']);
    $usuario = $DB->obtenDatos();

    $_SESSION['usuario'] = $usuario[0]['nombre'];

    print_r($_SESSION);

    $DB->ejecuta("SELECT * FROM usuarios");
    $usuarios = $DB->obtenDatos();
}

if(!isset($_SESSION['usuario']) && !isset($_COOKIE['recuerdame'])){
    header("Location: login.php");
    die();
}

echo $error;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $CONFIG['title'] ?></title>
</head>
<body>
    <h1>HOLLIWIS <?= $_SESSION['usuario'] ?></h1>
    <?php foreach($usuarios as $usuario) { ?>
        <?php print_r($usuario)?><br>
    <?php } ?>
</body>
</html>