<?php

//no se puede pintar nada delante de la cabecera esta. si le pones un echo por ejemplo arriba peta
/*header("Location: Redireccion.php");
die();*/

$claro = isset($_COOKIE['claro'])?$_COOKIE['claro']:0;

//primero nombre luego valor
setcookie("galleta","chichahoy");
setcookie("claro",$claro + 1);


print_r($_COOKIE);

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
    <h1>esto no se ve</h1>
</body>
</html>