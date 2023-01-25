<?php
    require("../src/init.php");
    require("../src/Mailer.php");

    $insertado = "";

    if(isset($_POST['registrar'])){
        $DB->ejecuta(
            "INSERT INTO usuarios (nombre, passwd, correo) VALUES (?,?,?)",
            $_POST['nombre'], password_hash($_POST['passwd'],PASSWORD_DEFAULT), $_POST['correo']
        );
        $insertado = $DB->getExecuted(); 
        echo $insertado; 
        if($insertado){
            $mail = new Mailer();
            $mail->sendEmail(
                $_POST['correo'],
                "Nuevo usuario",
                <<<EOL
                    Bienvenido {$_POST['nombre']},
                    Has hecho bien en registrarte.
                EOL
            );

            header("Location: login.php");
            die();
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
    <?php if(!$insertado) { ?>

        <form action="" method="post">
            NOMBRE: <input type="text" name="nombre" id="nombre"><br>
            CONTRASEÑA: <input type="password" name="passwd" id="passwd"><br>
            EMAIL: <input type="text" name="correo" id=""><br>
            <input type="submit" name="registrar" value="registrar">
            <a href="login.php">Ya tengo cuenta</a>
        </form>
    <?php }else { ?>
        Usuario registrado;
    <?php } ?>
</body>
</html>