<?php
require_once('db.php');

session_start();

$iniciado = false;

if(isset($_SESSION['user'])){
    $nombre = $_SESSION['user'];
    $iniciado = true;
}else{ 
    $nombre = "anonymous";
}



if(isset($_GET["artista"])){
    $artista = $_GET["artista"];
}else{
    header('Location: index.php');
    exit;
}

if(isset($_POST['enviar']) && isset($_SESSION['user'])){
    if(!empty($_POST)){

        $comentario = $_POST['comentario'];

        $resultado = $mbd->prepare('INSERT INTO contenido(artista, nombre, contenido) VALUES (:artista, :nombre, :contenido)');

        $resultado->bindValue(':artista',$artista);
        $resultado->bindValue(':nombre', $nombre);
        $resultado->bindValue(':contenido', $comentario);

        $resultado->execute();

        $resultado = null;
        $mdb = null;

        header("Location: contenido.php?artista=$artista");
        exit;
    }
}

function pintar($artista,$mbd){

    $resultado = $mbd->prepare('SELECT nombre,contenido FROM contenido WHERE artista = :artista');

    $resultado->setFetchMode(PDO::FETCH_ASSOC);
    $resultado->bindValue(':artista',$artista);

    $resultado->execute();

    echo "<div class='contenedorContenidos'>";
    while($row = $resultado->fetch()){
      echo "<div class='contenedor'> 
                <h3 class='usuario'>" . $row['nombre'] . "</h3>
                <p class='contenido'>" . $row['contenido']. "</p>
            </div>";
    }
    echo "</div>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" media="all" href="css/estilo.css">

</head>
<body>
    <div class="menu">
      <?php include('menu.php')?>
    </div>
    <div class="titulo">
        <h1>Barras <?= $artista?></h1>
    </div>
    <div>
        <?php pintar($artista, $mbd) ?> 
    </div>
    <br>
    <?php if($iniciado){ ?>
        <div class="textArea">
            <form action="contenido.php?artista=<?= $artista ?>" method="post">

                <textarea placeholder='Algo que añadir?' rows='3' cols='50' name='comentario' class='texto'></textarea>";
                <input type="submit" value="enviar" name="enviar" class="btnEnvio"/>
            </form>
        </div>
    <?php }?>
</body>
</html>