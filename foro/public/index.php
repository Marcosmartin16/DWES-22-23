<?php
require('./../src/init.php');

print_r($_SESSION);

$username = "";

if(isset($_SESSION['username']) && $_SESSION['username'] != ""){

    $username = $_SESSION['username'];

    $DB->ejecuta('SELECT artista FROM artistas');
    $artistas = $DB->obtenDatos();
}else{
    $username = "ANONYMOUS";
}

if(isset($_COOKIE['recuerdame'])){

    $recuerdame = $_COOKIE['recuerdame'];
  
    $DB->ejecuta('SELECT * FROM tokens WHERE valor = ?', $recuerdame);
    $datos = $DB->obtenDatos();
  
    $idUsuario = $datos[0]['id_usuario'];
  
    $DB->ejecuta('SELECT * FROM usuarios WHERE id = ?', $idUsuario);
    $datos = $DB->obtenDatos();
  
    $_SESSION['username'] = $datos[0]['username'];
}

function pintarArtistas($array){
    for($i = 0; $i < count($array); $i++){
        echo "<a href='contenido.php?artista=" . $array[$i]['artista'] . "'>" . $array[$i]['artista'] . "</a><br>";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" media="all" href="./..css/estilo.css">
</head>
<body>
    <a href="perfil.php"><?= $username ?></a>
    <a href="logout.php">log out</a><br>
    <?php pintarArtistas($artistas) ?>
</body>
</html>