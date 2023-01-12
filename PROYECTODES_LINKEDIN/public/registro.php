<?php
    require("../src/init.php");

    $insertado = "";

    if(isset($_POST['registrar'])){
        $DB->ejecuta(
            "INSERT INTO usuarios (nombre, passwd, correo) VALUES (?,?,?)",
            $_POST['nombre'], password_hash($_POST['passwd'],PASSWORD_DEFAULT), $_POST['correo']
        );
        $insertado = $DB->getExecuted();  
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
    <?php if(!$insertado) { ?>

        <form action="listado.php" method="post">
            NOMBRE: <input type="text" name="nombre" id="nombre"><br>
            CONTRASEÑA: <input type="password" name="passwd" id="passwd"><br>
            EMAIL: <input type="text" name="correo" id=""><br>
            <input type="submit" name="registrar" value="registrar">
        </form>
    <?php }else { ?>
        Usuario registrado;
    <?php } ?>
</body>
</html>