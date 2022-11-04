<?php

require('Select.php');
require('Check.php');
require('Radio.php');
require('Numero.php');
require('Texto.php');

$select = new Select();
$check = new Check();

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
            <label for ="nombre">NOMBRE: </label>
            <input type="text"  name="nombre" id="nombre" value="" placeholder="NOMBRE">
            <label for ="apellidos">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;APELLIDOS: </label>
            <input type="text"  name="apellidos" id="apellidos" value="" placeholder="APELLIDOS"><br><br>

            <label for ="edad">EDAD: </label>
            <input type="number" size="1" max="99" min="18" name="edad" value="" id="edad"><br><br>

            <b>SEXO: </b> <br>
            HOMBRE<input type="radio" name="sexo" value="" id="sexo">
            MUJER<input type="radio" name="sexo" value="" id="sexo">
            OTRO<input type="radio" name="sexo" value="" id="sexo"><br><br>

            <b>SELECCIONE PROVINCIA:</b><br>
            <select name="provincias" id="provincias">
                <?php $select->crear([" ","MADRID","BARCELONA","VALENCIA","MURCIA","SEVILLA"]);?>

            </select>
        </fieldset>
        <fieldset><legend>HOBBIES</legend>
            <?php $check->crear(["DEPORTES","LECTURA","VIDEOJUEGOS","CINE"]);?>

            <br><textarea placeholder="Escribe sobre el hobbie/s seleccionados u otro que te guste" rows="5" cols="50"></textarea>
        </fieldset>
        <input type="submit" value="enviar" name="enviar"/>
    </form>
</body>
</html>