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
if(isset($_POST['enviar'])){
    if(!empty($_POST)){

        $artistaNuevo = $_POST['comentario'];

        $resultado = $mbd->prepare('INSERT INTO artistas(artista, nombre) VALUES (:artista, :nombre)');

        $resultado->bindValue(':artista',$artistaNuevo);
        $resultado->bindValue(':nombre', $nombre);

        $resultado->execute();

        $resultado = null;
        $mdb = null;

        header("Location: contenido.php?artista=$artistaNuevo");
        exit;
    }
}
function pintar($mbd){

    $resultado = $mbd->query('SELECT artista FROM artistas');

    $resultado->setFetchMode(PDO::FETCH_ASSOC);

    $resultado->execute();

    echo "<div class='contenedorContenidos'>";
    while($row = $resultado->fetch()){
      echo "<div class='contenedorArtistas'> 
                <a class='artistaLista' href='contenido.php?artista=" . $row['artista'] . "'>" . $row['artista'] . "</a>
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
        <h1>Artistas</h1>
    </div>
    <div class="artistas">
        <div class="grupo1">
           <?php pintar($mbd)?>
        </div>
    </div>
    <?php if($iniciado){ ?>
        <div class="textArea">
            <form action="index.php" method="post">

                <textarea placeholder='Nuevo artista' rows='3' cols='50' name='comentario' class='texto'></textarea>";
                <input type="submit" value="enviar" name="enviar" class="btnEnvio"/>
            </form>
        </div>
    <?php }?>
</body>
</html>