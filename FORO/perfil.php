<?php
session_start();

$iniciado = false;

if(isset($_SESSION['user'])){
   $nombre = $_SESSION['user'];
   $iniciado = true;
}else{ 
    header('Location: login.php');
    exit;
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
        <h1>PERFIL (PRIVADO)</h1>
    </div>
    <!--llamar funcion pinta todos los comentarios realizados por el usuario-->
</body>
</html>