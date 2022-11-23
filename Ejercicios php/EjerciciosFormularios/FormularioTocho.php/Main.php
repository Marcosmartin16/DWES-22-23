<?php
//Funcion Autoload
spl_autoload_register(function ($class){
    $classPath ="./";
    require("$classPath${class}.php");
});

//creacion de objetos
$select = new Select();
$check = new CheckBox();
$radio = new Radio();
$numero = new Numero();
$textoN = new Texto();
$textoAp = new Texto();
$textA = new TextArea();

$labelNumber = "Edad";
$labelNombre = "Nombre";
$labelApellido = "Apellido";

print_r($_POST);
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
    <h1>DATOS PERSONALES</h1>
    <form action="" method="post">
        <fieldset><legend>DATOS PERSONALES</legend>
        <?php 
                $textoN->crear($labelNombre,20,4,$_POST);
                $textoAp->crear($labelApellido,20,4,$_POST);
                $numero->crear($labelNumber,99,18,$_POST);
            ?>
            <b>SEXO: </b> <br>
                <?php $radio->crear($_POST); ?><br>

            <b>SELECCIONE PROVINCIA:</b><br>
                <?php $select->crear($_POST); ?>

        </fieldset>
        <fieldset><legend>HOBBIES</legend>
            <?php $check->crear($_POST);?><br>
            <?php $textA->crear($_POST);?>
            <br><br>
        </fieldset>
        <input type="submit" value="enviar" name="enviar"/>
    </form>
</body>
</html>