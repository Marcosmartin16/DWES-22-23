<?php

session_start();

$intentos = isset($_SESSION['intentos'])?$_SESSION['intentos']:3;
$intentos--;
$_SESSION['intentos'] = $intentos;

$adivinar = isset($_SESSION['adivinar'])?$_SESSION['adivinar']:mt_rand(0,10);
$_SESSION['adivinar'] = $adivinar;

$mensaje = "";

if(empty($_POST)){
    $mensaje = "BIENVENIDO";
}

if(isset($_POST['Enviar'])){

    if($_POST['numero'] == $_SESSION['adivinar']){

        $mensaje = "ganaste";

        /*$adivinar = isset($_SESSION['adivinar'])?$_SESSION['adivinar']:mt_rand(0,10);
        $_SESSION['adivinar'] = $adivinar;

        $intentos = isset($_SESSION['intentos'])?$_SESSION['intentos']:3;
        $intentos--;
        $_SESSION['intentos'] = $intentos;*/
    }else {
        
        $mensaje = "fallaste";


        /*$adivinar = isset($_SESSION['adivinar'])?$_SESSION['adivinar']:mt_rand(0,10);
        $_SESSION['adivinar'] = $adivinar;

        $intentos = isset($_SESSION['intentos'])?$_SESSION['intentos']:0;
        $intentos++;
        $_SESSION['intentos'] = $intentos;*/
    }
}

echo $mensaje;

echo $_SESSION['adivinar'] . " numero a adivinar <br>";
echo $intentos . " intentos restantes <br>";

print_r($_POST);
print_r($_SESSION);

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
    <form action="post">
        <input type = "text" id="numero" name="numero" value="<?php $_POST['numero']?>">
        <input type = "submit" id="Enviar" name="Enviar" value="Enviar">
    </form>
</body>
</html>