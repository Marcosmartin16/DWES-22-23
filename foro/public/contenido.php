<?php

require_once('./../src/init.php');

$iniciado = false;
if(isset($_SESSION['username']) && $_SESSION['username'] != ""){
    $iniciado = true;
}

if(isset($_GET['artista']) && $_GET['artista'] != ""){

    $artista = $_GET['artista'];
}else{
    header('Location: index.php');
    die();
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

function pintar($artista, $DB){

    $DB->ejecuta('SELECT * FROM contenido WHERE artista = ?', $artista);
    $datos = $DB->obtenDatos();

    for($i = 0; $i < count($datos); $i++){
        echo "<h1>" . $datos[$i]['nombreCancion'] . "</h1>";
        echo "<p>" . $datos[$i]['contenido'] . "</p><br>";
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
</head>
<body>
    <div class="titulo">
        <h1>Barras <?= $artista?></h1>
    </div>
    <div>
        <?php pintar($artista, $DB) ?> 
    </div>
    <br>
    <?php if($iniciado){ ?>
        <div class="textArea">
            <form action="contenido.php?artista=<?= $artista ?>" method="post">

                <textarea placeholder='Algo que añadir?' rows='3' cols='50' name='comentario' class='texto'></textarea>
                <input type="submit" value="enviar" name="enviar" class="btnEnvio"/>
            </form>
        </div>
    <?php }?>
</body>
</html>