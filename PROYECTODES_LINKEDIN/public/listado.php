<?php

require("../src/init.php");

$DB->ejecuta("SELECT * FROM usuarios");
$usuarios = $DB->obtenDatos();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $CONFIG['title'] ?></title>
</head>
<body>
    <h1>HOLLIWIS</h1>
    <?php foreach($usuarios as $usuario) { ?>
        <?php print_r($usuario)?><br>
    <?php } ?>
</body>
</html>