<?php
//date("h") muestra la hora del sistema y el date("i") los minutos
$tema = "";
$hora = date("h");
$minuto = date("i");

//introducimos en un array los valores del select
$opcionesMinuto = [0,15,20,45];

//buscamos los minutos mayores al actual y los mete un un array EJEMPLO: son y 10 el minuto mas cercano es y 15
$mayor = array_filter($opcionesMinuto,function($m){
    global $minuto;
    return $m > $minuto;
});

//si el array esta vacio significa q la siguiente opcion disponible es la siguiente hora por lo que ponemos los minutos a 0 y sumamos 1 a la hora actual
if(empty($mayor)){
    $minuto = 0;
    $hora++;
}else{
    //array_shift muestra el primero del array para colocarlo en minuto debido a que es el mas proximo
    $minuto = array_shift($mayor);
}

//creamos array errores
$errores = [];

//comprobamos is nos envian el formulario
if(isset($_POST['enviar'])){
    
    //si se ha introducido el tema y no es un espacio en blanco si no se cumple se introduce un error en el array de errores con el valor tema
    if(isset($_POST['tema']) && $_POST['tema'] != ""){
        $tema = $_POST['tema'];
    }else{
        $errores['tema'] = 'No puede estar vacio';
    }
    
    if(isset($_POST['hora']) && $_POST['hora'] != ""){
        $hora = $_POST['hora'];
    }else{
        $errores['hora'] = 'No puede estar vacio';
    }

    if(isset($_POST['minuto']) && $_POST['minuto'] != ""){
        $minuto = $_POST['minuto'];
    }else{
        $errores['minuto'] = 'No puede estar vacio';
    }

    //si no tenemos ningun error añadimos la informacion a un fichero csv
    if(count($errores) == 0){
        //colocamos el nombre del fichero, los datos a introducir y file_append para añadir el contenido al fichero
        file_put_contents("temas.csv", "$tema;$hora;$minuto\n", FILE_APPEND);
        //le pasamos el fichero php donde queremos que lo pinte al darle a enviar
        header("Location: Listado.php");
        exit();
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
    <style>
        .error{
            color:red;
            font-size: 0.5em;
        }

        .error p {
            margin:0;
            margin-bottom: 0.1cm;
        }
    </style>
</head>
<body>
    <div>
        <form action="" method="post">
            <label for ="tema">Tema</label>
            <input type="text"  name="tema" id="tema" value="<?=$tema?>" placeholder="tema"><br>
            <?php
                if(isset($errores['tema'])){
                    echo '<div class="error">';
                    echo '<p>' . $errores['tema'] . '</p>';
                    echo '</div>';
                }
            ?>
            <label for ="hora">Hora</label>
            <input type="number" size="1" max="23" min="0" name="hora" value="<?=$hora?>" id="hora">
            <label for ="minuto">Minuto</label>
            <select name="minuto" id="minuto"> 
                <?php
                    array_walk(
                        $opcionesMinuto,
                        function($op, $k, $d){
                            $sel = ($op==$d)?"selected":"";
                            echo "<option value='$op' $sel>$op</option>";
                        },
                        $minuto
                    );
                ?>
            </select><br>
            <?php
                if(isset($errores['hora'])){
                    echo '<div class="error">';
                    echo '<p>' . $errores['hora'] . '</p>';
                    echo '</div>';
                }

                if(isset($errores['minuto'])){
                    echo '<div class="error">';
                    echo '<p>' . $errores['minuto'] . '</p>';
                    echo '</div>';
                }
            ?>
            <input type="submit" value="enviar" name="enviar">
        </form>
    </div>
</body>
</html>