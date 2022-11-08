<?php

require('Select.php');
require('Check.php');
require('Radio.php');
require('Numero.php');
require('Texto.php');

$select = new Select();
$check = new Check();
$radio = new Radio();
$numero = new Numero();
$texto = new Texto();
$textA = new Texto();

$arrayError = [];
print_r($_POST);

if(isset($_POST['enviar'])){

    if($texto->comprobar($_POST['nombre']) && $texto->comprobar($_POST['apellido'])){
        array_push($arrayError, ["texto"=>" "]);
    }else{
        $arrayError += ["texto"=>"Error en Nombre o Apellido"];
    }

    if($numero->comprobar($_POST['edad'])){
        array_push($arrayError, ["numero"=>" "]);
    }else{
        $arrayError += ["numero"=>"Error en edad"];
    }

    if($radio->comprobar($_POST)){
        $radio->setSexo($_POST['sexo']);
        array_push($arrayError, ["radio"=>" "]);
    }else{
        $arrayError += ["radio"=>"Error en radio"];
    }

    if($check->comprobar($_POST)){
        $check->setHobbies($_POST['hobbies']);
        array_push($arrayError, ["check"=>" "]);
    }else{
        $arrayError += ["check"=>"Error en check"];
    };

    if($select->comprobar($_POST['provincias'])){
        array_push($arrayError, ["select"=>" "]);
    }else{
        $arrayError += ["select"=>"Error en select"];
    };

    if($textA->comprobar($_POST['textA'])){
        array_push($arrayError, ["textA"=>" "]);
    }else{
        $arrayError += ["textA"=>"Error en textArea"];
    };
}
print_r($arrayError);

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
            <input type="text"  name="apellidos" id="apellidos" value="" placeholder="APELLIDOS"><br>
            <?php
                   echo $arrayError["texto"];
            ?><br><br>

            <label for ="edad">EDAD: </label>
            <input type="number" size="1" max="99" min="18" name="edad" value="" id="edad"><br>
            <?php
                   echo $arrayError["numero"];
            ?><br><br>

            <b>SEXO: </b> <br>
            HOMBRE<input type="radio" name="sexo" value="" id="Hombre">
            MUJER<input type="radio" name="sexo" value="" id="Mujer">
            OTRO<input type="radio" name="sexo" value="" id="Otro">
                <?php
                   echo $arrayError["radio"];
                ?>
            <br><br>

            <b>SELECCIONE PROVINCIA:</b><br>
            <select name="provincias" id="provincias">
                <?php $select->crear([" ","MADRID","BARCELONA","VALENCIA","MURCIA","SEVILLA"]);?><br>
            </select>
            <?php echo $arrayError["select"];?>
        </fieldset>
        <fieldset><legend>HOBBIES</legend>
            <?php $check->crear(["DEPORTES","LECTURA","VIDEOJUEGOS","CINE"]);
                echo $arrayError["check"];
            ?>

            <br><textarea placeholder="Escribe sobre el hobbie/s seleccionados u otro que te guste" rows="5" cols="50" name="textA"></textarea>
            <?php
                   echo $arrayError["textA"];
            ?><br><br>
        </fieldset>
        <input type="submit" value="enviar" name="enviar"/>
    </form>
</body>
</html>