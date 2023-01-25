<?php

require("../src/init.php");
require("../src/Mailer.php");

$enviado = false;
$sinID = true;

if(isset($_GET["id"])){
    $id = $_GET["id"];
    $sinID = false;
}else{
    $sinID = true;
}

if(isset($_POST['btnRecuperar'])){
    
    $enviado = true;

    $email = $_POST['email'];

    $DB->ejecuta(
        "SELECT id, nombre, correo FROM usuarios WHERE correo = ?",
        $email
    );
    $datos = $DB->obtenDatos();

    if($datos[0]['correo'] == $email){

        $mail = new Mailer();
        $mail->sendEmail(
            $email,
            "Recuperacion de contraseña",
            <<<EOL
                HOLA {$datos[0]['nombre']},
                Has solicitado la recuperacion de contraseña.
                Pulsa el siguiente enlace para acceder a la recuperacion.
                <a href='localhost:8000/recuperarContra.php?id={$datos[0]['id']}'>ENLACE DE RECUPERACION</a>
            EOL
            );
    }
}

if(isset($_POST['btnCambiar'])){
    
    $email = $_POST['email'];

    $DB->ejecuta(
        "SELECT id, nombre, correo FROM usuarios WHERE correo = ?",
        $email
    );
    $datos = $DB->obtenDatos();

    if($email == $datos[0]['correo']){
        if($_POST['nuevaContra'] == $_POST['repetirNuevaContra']){
        
            $DB->ejecuta(
                "UPDATE usuarios SET passwd = ? WHERE id = ?",
                password_hash($_POST['nuevaContra'],PASSWORD_DEFAULT),
                $id
            );    
    
            $cambiado = $DB->getExecuted();
    
            if($cambiado){
        
                $mail = new Mailer();
                $mail->sendEmail(
                    $email,
                    "Cambio de contraseña",
                    <<<EOL
                        HOLA {$datos[0]['nombre']},
                        Has solicitado el cambio de contraseña.
                        La nueva constraseña sera {$_POST['nuevaContra']}.
                    EOL
                    );

                    header("Location: login.php");
                    die();
            }
        }else{
            echo "CONTRASEÑAS NO COINCIDEN";
        }
    }else{

        echo "EMAIL NO CORRESPONDE";
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
    

    <?php
        if($sinID){
            if($enviado){ ?>

                <h3>Si el correo existe te enviaremos un enlace de recuperacion</h3>

        <?php 
            }else{ ?>

            <form method="post">
                Correo Electronico <input type="text" id="email" name="email"><br>
                <input type="submit" name="btnRecuperar" value="Recuperar Contraseña">
            </form>

        <?php
            } 
        }else{ ?>
            <form method="post">
                Correo Electronico <input type="text" id="email" name="email"><br>
                Nueva contraseña: <input type="text" id="nuevaContra" name="nuevaContra"><br>
                Repetir nueva contraseña: <input type="text" id="repetirNuevaContra" name="repetirNuevaContra"><br>
                <input type="submit" name="btnCambiar" value="Cambiar Contraseña">
            </form>
    <?php 
        } ?>
</body>
</html>