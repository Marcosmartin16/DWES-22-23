<?php

require_once('./../src/init.php');
require_once('./../src/Mailer.php');

if(isset($_SESSION['username']) && $_SESSION['username'] != ""){

    header('Location: index.php');
    die();
}

if(isset($_POST['signUp'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($username != "" && $email != "" && $password != ""){

        $DB->ejecuta('SELECT * FROM usuarios WHERE username = ?', $username);
        $buscaUsuario = $DB->obtenDatos();

        $DB->ejecuta('SELECT * FROM usuarios WHERE email = ?', $email);
        $buscaEmail = $DB->obtenDatos();

        if(!empty($buscaUsuario)){
            echo " nombre de usuario ya en uso ";
        }
        if(!empty($buscaEmail)){
            echo " email ya en uso ";
        }

        if(empty($buscaUsuario) && empty($buscaEmail)){
            $DB->ejecuta('INSERT INTO usuarios(username, email, pass) VALUES (?,?,?)',$username, $email, password_hash($password, PASSWORD_DEFAULT));
            $insertado = $DB->getExecuted();

            if($insertado){

                $mail = new Mailer;
                $mail->sendEmail($email,"NUEVO USUARIO","GRACIAS POR REGISTRARTE");

                header("Location: login.php");
                die();
            }else{
                echo "Algo a ido mal vuelva a intentarlo";
            }
        }
    }else{
        echo "rellene todos los campos";
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
        USERNAME: <input type="text" name="username" id="username"><br>
        EMAIL: <input type="text" name="email" id="email"><br>
        PASSWORD: <input type="password" name="password" id="password"><br>
        <input type="submit" value="SIGN UP" name="signUp"><br>
        <a href="login.php">LOG IN</a>
    </form>
</body>
</html>