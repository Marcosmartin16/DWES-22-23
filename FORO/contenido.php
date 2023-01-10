<?php
require_once('db.php');

session_start();


if(isset($_SESSION['user'])){
    $nombre = $_SESSION['user'];
}else{ 
    $nombre = "anonymous";
}



if(isset($_GET["area"])){
    $area = $_GET["area"];
}else{
    header('Location: index.php');
    exit;
}

if(isset($_POST['enviar']) && isset($_SESSION['user'])){
    if(!empty($_POST)){

        $comentario = $_POST['comentario'];

        $resultado = $mbd->prepare('INSERT INTO contenido(area, nombre, contenido, likes, dislikes) VALUES (:area, :nombre, :contenido, :likes, :dislikes)');

        $resultado->bindValue(':area',$area);
        $resultado->bindValue(':nombre', $nombre);
        $resultado->bindValue(':contenido', $comentario);
        $resultado->bindValue(':likes', 0);
        $resultado->bindValue(':dislikes', 0);

        $resultado->execute();

        $resultado = null;
        $mdb = null;

        header("Location: contenido.php?area=$area");
        exit;
    }
}

function pintar($area,$mbd){

    $resultado = $mbd->prepare('SELECT nombre,contenido,likes,dislikes FROM contenido WHERE area = :area');

    $resultado->setFetchMode(PDO::FETCH_ASSOC);
    $resultado->bindValue(':area',$area);

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
        <h1><?= $area?></h1>
    </div>
    <div>
        <?php pintar($area, $mbd) ?> 
    </div>
    <br>
    <div class="textArea">
        <form action="contenido.php?area=<?= $area ?>" method="post">

            <textarea placeholder='Algo que añadir?' rows='3' cols='50' name='comentario' class='texto'></textarea>";
            <input type="submit" value="enviar" name="enviar" class="btnEnvio"/>
        </form>
    </div>
</body>
</html>