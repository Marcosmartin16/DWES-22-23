<?php
require("../src/init.php");

$errores = 0;

if(isset($_POST['login'])){
    if($_POST['nombre'] != "" && $_POST['passwd'] != ""){
        $nombre = $_POST['nombre'];
        $passwd = $_POST['passwd'];

        $DB->ejecuta(
            "SELECT id, nombre, passwd FROM usuarios WHERE nombre = ?",
            $_POST['nombre']
        );
        $datos = $DB->obtenDatos();
        
        echo $datos[0]['passwd'];

        if(!password_verify($passwd, $datos[0]['passwd'])){
            $errores++;
        }else{
            $_SESSION['id'] = $datos[0]['id'];
            $_SESSION['usuario'] = $datos[0]['nombre'];

            if(isset($_POST['recuerdame']) && $_POST['recuerdame'] == 'on'){
                //generar token
                $token = bin2hex(openssl_random_pseudo_bytes($CONFIG['LONG_TOKEN']));

                //guardar token
                $DB->ejecuta(
                    "INSERT INTO tokens(id_usuario, valor) VALUES (?, ?)",
                    $_SESSION['id'],
                    $token
                );

                setcookie("recuerdame", $token, [
                    "expires" =>  time() + 7 * 24 * 60 * 60,
                    "httponly" => true
                ]);
            }
            
            header("Location: listado.php");
            die();
        }
    }else{
        $errores++;
    }
}

if(isset($_GET['redirect'])){
    header("Location: {$_GET['redirect']}");
    die();
}else{
    header("Location: listado.php");
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
    <form action="" method="post">
        Username:<input type="text" name="nombre" id="">
        Password:<input type="password" name="passwd" id="">
        Recuerdame:<input type="checkbox" name="recuerdame" id="">
        <input type="submit" value="Login" name="login">
    </form>
</body>
</html>