<?php
session_start();

if(isset($_SESSION['user'])){
    print_r($_SESSION['user']);
    $nombre = $_SESSION['user'];
}else{
    $nombre = "anonymous";
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
        <h1>PUBLICO</h1>
    </div>
    <div>
        <div>
            <a href="contenido.php?area=tema1">TEMA 1</a>
        </div>
        <div>
            <a href="contenido.php?area=tema2">TEMA 2</a>
        </div>
    </div>
</body>
</html>