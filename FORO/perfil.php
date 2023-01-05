<?php
session_start();

if(isset($_SESSION['user'])){
   print_r($_SESSION['user']);
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
    <h1>PERFIL (PRIVADO)</h1>
    <?php include('menu.php')?>
    <!--llamar funcion pinta todos los comentarios realizados por el usuario-->
</body>
</html>