<?php
    if(isset($_GET['nombre']) && isset($_GET['empresa']) && isset($_GET['responsable']) && isset($_GET['fecha'])){
        $nombre = $_GET['nombre'];
        $empresa = $_GET['empresa'];
        $responsable = $_GET['responsable'];
        $fecha = $_GET['fecha'];

        if($nombre != "" && $empresa != "" && $responsable != ""){
            require('fpdf184/fpdf.php');

            $pdf = new FPDF();
            $pdf -> AddPage();
            $pdf -> SetFont('Arial', 'B', 18);
            $pdf -> Cell(60,20, 'Hola mi nombre es ' . $nombre );
            $pdf -> Cell(60,30,' te escribo desde la empresa ' . $empresa );
            $pdf -> Cell(60,40,' donde mi responsable es ' . $responsable );
            $pdf -> Cell(60,50," a fecha de  " . $fecha );
    
            $pdf -> Output();
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
    </head>
    <body>
        <h1>Genera tu carta de motivacion</h1>
        <div>
            <form action="CartaPDF.php" method="get">
                Nombre: <input type="text"  name="nombre" id="" value=<?=$nombre?>><br>
                Empresa: <input type="text"  name="empresa" id="" value=<?=$empresa?>><br>
                Responsable: <input type="text"  name="responsable" id="" value=<?=$responsable?>><br>
                Fecha: <input type="date"  name="fecha" id="" value=<?=$fecha?>><br>

                <input type="submit" value="Generar PDF">
            </form>
        </div>
    </body>
</html>