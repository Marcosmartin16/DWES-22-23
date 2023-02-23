<?php

require_once('./../src/init.php');

if(isset($_COOKIE['recuerdame'])){

    $recuerdame = $_COOKIE['recuerdame'];
  
    $DB->ejecuta('SELECT * FROM tokens WHERE valor = ?', $recuerdame);
    $datos = $DB->obtenDatos();
  
    $idUsuario = $datos[0]['id_usuario'];
  
    $DB->ejecuta('SELECT * FROM usuarios WHERE id = ?', $idUsuario);
    $datos = $DB->obtenDatos();
  
    $_SESSION['username'] = $datos[0]['username'];
  
    header('Location: index.php');
    die();
}

if(isset($_SESSION['username']) && $_SESSION['username'] != ""){

    $username = $_SESSION['username'];

    $DB->ejecuta('SELECT artista FROM artistas WHERE username = ?', $username);
    $datos = $DB->obtenDatos();

    $artistas = [];
    for($i = 0; $i < count($datos); $i++){
        array_push($artistas, $datos[$i]['artista']);
    }

    $DB->ejecuta('SELECT * FROM contenido WHERE username = ?', $username);
    $contenido = $DB->obtenDatos();

    $DB->ejecuta('SELECT * FROM usuarios WHERE username = ?', $username);
    $datosUsuario = $DB->obtenDatos();

}else{
    header('Location: login.php');
    die();
}


if(isset($_POST['enviar'])){
    if(isset($_FILES['img'])){
        $imagen = $_FILES['img'];
        $nombreTempImagen = $imagen['tmp_name'];
        $nombre = $imagen['name'];
        $tipo = $imagen['type'];

        $ruta = "upload/" . $nombre;

        if($imagen['error'] == 0){
            if(move_uploaded_file($nombreTempImagen, $ruta)){
                $DB->ejecuta('UPDATE usuarios SET img = ? WHERE username = ?', $ruta, $_SESSION['username']);
                $imgCambiada = $DB->getExecuted();
                if($imgCambiada){
                    echo "hola foto cambiada";
                }
            }
        }
    }
}

function pintarDatosUsuario($array){
    echo "<h1>DATOS PERSONALES</h1>";
    echo "<p>" . $array[0]['username'] . "</p>";
    echo "<p>" . $array[0]['email'] . "</p>";
    echo "<img src='" . $array[0]['img'] . "'>";
}

function pintarArtistas($array){
    echo "ARTISTAS FAVORITOS<ul>";
    for($i = 0; $i < count($array); $i++){
        echo "<li>" . $array[$i] . "</li>";
    }
    echo "</ul>";
}

function pintarBarras($array){
    echo "BARRAS FAVORITOS<ul>";
    for($i = 0; $i < count($array); $i++){
        echo "<li>" . $array[$i]['artista'] . "-><p>" . $array[$i]['contenido'] . "</p></li>";
    }
    echo "</ul>";
}

print_r($_FILES);
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
    <h1>HOLA <?= $username ?></h1>
    <a href="index.php">index</a><br>
    <?php pintarDatosUsuario($datosUsuario) ?><br>
    <?php pintarArtistas($artistas) ?>
    <?php pintarBarras($contenido) ?><br>

    <form method="post" enctype="multipart/form-data">
        Imagen: <input type="file" name="img" id="img"><br>
        <input type="submit" value="enviar" name="enviar">
    </form>
</body>
</html>