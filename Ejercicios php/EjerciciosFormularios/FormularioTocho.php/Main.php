<?php
//cambiar por autoload
require('Select.php');
require('Check.php');
require('Radio.php');
require('Numero.php');
require('Texto.php');

$select = new Select();
$check = new Check();
$radio = new Radio();
$numero = new Numero();
$textoN = new Texto();
$textoAp = new Texto();
$textA = new Texto();

$arrayError = [];
$arraySelect = [" ","MADRID","BARCELONA","VALENCIA","MURCIA","SEVILLA"];
$arrayCheck = ["DEPORTES","LECTURA","VIDEOJUEGOS","CINE"];
$arrayRadio = ['HOMBRE','MUJER','OTRO'];
$labelNumber = "Edad";
$labelNombre = "Nombre";
$labelApellido = "Apellido";

/*function cleanData($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}*/

if(isset($_POST['enviar'])){

    if($textoN->comprobar($_POST[$labelNombre]) && $textoAp->comprobar($_POST[$labelApellido])){
        $textoN->setX($_POST[$labelNombre]);
        $textoAp->setX($_POST[$labelApellido]);

        array_push($arrayError, ["texto"=>" "]);
    }else{
        $arrayError += ["texto"=>"Error en Nombre o Apellido"];
    }

    if($numero->comprobar($_POST[$labelNumber])){
        $numero->setX($_POST[$labelNumber]);
        array_push($arrayError, ["numero"=>" "]);
    }else{
        $arrayError += ["numero"=>"Error en edad"];
    }

    if($radio->comprobar($_POST)){
        $radio->setX($_POST['sexo']);
        array_push($arrayError, ["radio"=>" "]);
    }else{
        $arrayError += ["radio"=>"Error en radio"];
    }

    if($check->comprobar($_POST)){
        $check->setX($_POST['check']);
        array_push($arrayError, ["check"=>" "]);
        
    }else{
        $arrayError += ["check"=>"Error en check"];
    };

    if($select->comprobar($_POST['provincias'])){
        $select->setX($_POST['provincias']);
        array_push($arrayError, ["select"=>" "]);

        $valor = $select->getX();
        array_shift($arraySelect);
        $posicion = array_search($valor, $arraySelect);
        unset($arraySelect[$posicion]);
        array_unshift($arraySelect,$valor);
        print_r($arraySelect);

    }else{
        $arrayError += ["select"=>"Error en select"];
    };

    if($textA->comprobar($_POST['textA'])){
        $textA->setX($_POST['textA']);
        array_push($arrayError, ["textA"=>" "]);
    }else{
        $arrayError += ["textA"=>"Error en textArea"];
    };

    

    //ENVIAR DATOS A OTRA VENTANA O CREAR PDF
    //llamar a funcion cleanData
}
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
            <!-- <input type="text"  name="nombre" id="nombre" value="<?php echo $textoN->getX()?>" placeholder="NOMBRE"> -->
            <?php $textoN->crear($labelNombre,20,4,$textoN->getX())?><br>
            <?php $textoAp->crear($labelApellido,20,4,$textoAp->getX())?>

            <!-- <input type="text"  name="apellidos" id="apellidos" value="<?php echo $textoAp->getX()?>" placeholder="APELLIDOS"><br> -->
            <?php
                   echo $arrayError["texto"];
            ?><br><br>
            
            <?php
                $numero->crear($labelNumber,99,18,$numero->getX());
                echo $arrayError["numero"];
            ?>
            <br><br>

            <b>SEXO: </b> <br>
            
                <?php
                    $radio->crear($arrayRadio, $radio->getX());
                    echo $arrayError["radio"];
                ?>
            <br><br>

            <b>SELECCIONE PROVINCIA:</b><br>
            <select name="provincias" id="provincias">
                <?php 
                    $select->crear($arraySelect);                    
                ?>
                
            </select>
            <?php echo $arrayError["select"];?>
        </fieldset>
        <fieldset><legend>HOBBIES</legend>
            <?php
                $check->crear($arrayCheck,$check->getX());
                echo $arrayError["check"];
            ?>

            <br><textarea placeholder="Escribe sobre el hobbie/s seleccionados u otro que te guste" rows="5" cols="50" name="textA" value=""><?php echo $textA->getX()?></textarea>
            <?php
                   echo $arrayError["textA"];
            ?><br><br>
        </fieldset>
        <input type="submit" value="enviar" name="enviar"/>
    </form>
</body>
</html>