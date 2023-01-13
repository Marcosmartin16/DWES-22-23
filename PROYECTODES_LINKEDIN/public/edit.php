<?php

if(!isset($_SESSION['usuario']) || $_SESSION['usuario'] == ""){
    header("Location; login.php?redirect=edit.php");
    die();
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
    <h1>FORMULARIO PRIVADO EDITAR PERFIL</h1>
</body>
</html>