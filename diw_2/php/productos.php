<?php

require("src/init.php");

if(isset($_GET['nombreProductos'])){
    $nombreProductos = $_GET['nombreProductos'];
}

function pintarProductos($nombreProductos, $DB){

    $DB->ejecuta("SELECT * from $nombreProductos");

    $datos = $DB->obtenDatos();

    echo "<!DOCTYPE html>
            <html lang='en'>
            <head>
                <meta charset='UTF-8'>
                <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <link rel='stylesheet' href='./HojasEstilos/productos.css'>
                <title>Document</title>
                <style>

                    .producto{
                        background-img: url
                    }
                </style>
            </head>
            <body>";
                
            
    
    echo "<div class='titulo'>TITULO: " . $nombreProductos . "</div>";
    
    echo "<div class='productos'>";
        array_walk($datos,function($element, $clave){
            echo "<div class='producto'>";
                echo "<div class='info'>";

                    array_walk($element,function($element, $clave){
                        if($clave == "nombre"){
                            echo "<a href='caca.html' class='nombre'>" . $element . "</a>";
                        }
                        if($clave == "descripcion"){
                            echo "<p class='descripcion'>" . $element . "</p>";
                        }
                        if($clave == "precio"){
                            echo "<h4 class='precio'>" . $element . "</h4>";
                        }
                    });
                echo "</div>";
                /*array_walk($element,function($element, $clave){
                    if($clave == "img"){
                        echo "<img src='$element' class='imag'>";
                    }
                });*/

                
            echo "</div>";
        });
    echo "</div>";
    echo "</div>";

    echo "</body>
        </html>";
}

pintarProductos($nombreProductos, $DB);
?>
