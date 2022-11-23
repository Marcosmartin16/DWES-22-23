Utilice 3 variables: $nombre, $r, $pi. Al visitar la página establecerá el valor de las variables,
 escribirá un mensaje de bienvenida y escribirá el área y el perímetro de la circunferencia.
 NOTA: Utiliza un fichero css para dar estilo a cada parte.

**************************************************************************************************


<?php
    $nombre = "Marcos";
    $r = 0;
    $pi = 3.14;
    $error = false;
    // $_GET -> informacion de la cabecera
   if(isset($_GET['radio'])){
        $r = $_GET['radio'];
        if($r == ""){
            $r = 0;
            $error = true;
        }
   }else {
        $r = 0;
   }
?>

<html>
    <head>
        <style>
        
            h1{
                color: #EB0B02;
                letter-spacing: 1px;
                font-style: italic;
            }
            
            #area{
                color: #0245F8;
                font-size: 24px;
            }
            
            #perimetro{
                color: #F57402;
                font-size: 24px;
            }
            
        </style>
    </head>
    
    <body>
        
        <h1>bienvenido <?= $nombre ?></h1>
        <?php if($error) { ?>
            <h3>mete un numero</h3>
        <?php } ?>
        <div>
            <form action="ejercicio5.php" method="get">
                Radio: <input type="number" step="0.01" name="radio" id="" value=<?=$r?>><br>
                <input type="submit" value="calcular">
            </form>
        </div>
        <div>
            <p id="area">El area de la circunferencia es <?= $pi*($r*$r) ?></p>
            <p id="perimetro">El perimetro de la circunferencia es <?= 2*$r*$pi ?></p>
        </div>
    </body>
</html>