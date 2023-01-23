<?php
require("../src/init.php");
require("../src/Mailer.php");

if(isset($_COOKIE['recuerdame'])){
    
    $DB->ejecuta("SELECT * FROM tokens WHERE valor = ?", $_COOKIE['recuerdame']);
    $usuario = $DB->obtenDatos();
        
    $DB->ejecuta("SELECT nombre FROM usuarios WHERE id = ?", $usuario[0]['id_usuario']);
    $usuario = $DB->obtenDatos();
        
    $_SESSION['usuario'] = $usuario[0]['nombre'];
    
    print_r($_SESSION['usuario']);
    
}

if(!isset($_SESSION['usuario'])){
    header("Location: login.php");
    die();
}

print_r($_SESSION);
//COMIENZA CAMBIO CONTRA
if(isset($_POST['btnCambiar'])){
    
    print_r($_POST);

    $antiguaContra = $_POST['antiguaContra'];
    $nuevaContra = $_POST['nuevaContra'];

    $DB->ejecuta(
        "SELECT id, nombre, passwd, correo FROM usuarios WHERE nombre = ?",
        $_SESSION['usuario']
    );
    $datos = $DB->obtenDatos();

    $idUsuario = $datos[0]['id'];
    $correoUsuario = $datos[0]['correo'];
    
    if(password_verify($antiguaContra, $datos[0]['passwd'])){
        $insertado = $DB->getExecuted(); 

        if($antiguaContra != $nuevaContra){

            $DB->ejecuta(
                "UPDATE usuarios SET passwd = ? WHERE id = ?",
                password_hash($nuevaContra,PASSWORD_DEFAULT),
                $idUsuario
            );

            $cambiado = $DB->getExecuted();

            if($cambiado){
                $DB->ejecuta(
                    "DELETE FROM tokens WHERE id = ?",
                    $idUsuario
                );

                $borrado = $DB->getExecuted();

                if($borrado){

                    //ENVIAR CORREO DE CONTRASEÑA CAMBIADA

                    echo "CONTRASEÑA ACTUALIZADA DESPUES DE BORRAR TOKENS";


                    $mail = new Mailer();
                    $mail->sendEmail(
                        $correoUsuario,
                        "ACTUALIZACION DE CONTRASENIA",
                        <<<EOL
                            HOLA {$_SESSION['usuario']},
                            Su contrasenia ha sido actualizada.
                            Nueva Contrasenia {$nuevaContra}
                        EOL
                    );
                }
            }
        }else{
            echo "INTRODUCIR CONTRASEÑA DISTINTA A LA ANTERIOR";
        }
    }else{

        echo "CONTRASEÑA ANTIGUA INCORRECTA";
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
    <form method="post">
        Antigua contraseña: <input type="text" id="antiguaContra" name="antiguaContra"><br>
        Nueva contraseña: <input type="text" id="nuevaContra" name="nuevaContra"><br>
        <input type="submit" name="btnCambiar" value="Cambiar Contraseña">
    </form>
</body>
</html>