<?php
require_once('db.php');

session_start();

if(isset($_SESSION['user'])){
   $nombre = $_SESSION['user'];
}else{ 
    header('Location: login.php');
    exit;
}


function pintar($mbd, $nombre){

    $resultado = $mbd->prepare('SELECT artista,contenido FROM contenido WHERE nombre = :nombre');

    $resultado->setFetchMode(PDO::FETCH_ASSOC);
    $resultado->bindValue(':nombre',$nombre);

    $resultado->execute();

    echo "<div class='contenedorContenidos'>";
    while($row = $resultado->fetch()){
      echo "<div class='contenedor'> 
                <h3 class='artista'>" . $row['artista'] . "</h3>
                <h4 class='contenido'>" . $row['contenido']. "</h4>
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
      <?php include('menuPerfil.php')?>
    </div>
    <div class="titulo">
        <h1>PERFIL (PRIVADO)</h1><br>
        <h2>Bienvenido a su espacio <?= $nombre ?></h2>
    </div>
    <div>
        <h3>Aqui podra leer todos sus barrones</h3>
        <?php pintar($mbd, $nombre)?>
    </div>
</body>
</html>