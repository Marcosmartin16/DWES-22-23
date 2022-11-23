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
            $pdf -> SetFont('Arial', 'B', 12);
            
            //$pdf -> Cell(0,20, 'Hola mi nombre es ' . $nombre . ' te escribo desde la empresa ' . $empresa .' donde mi responsable es ' . $responsable . ' a fecha de  ' . $fecha);
            //MultiCell(ancho =0 ancho de pagina, alto = 20 anchura de la linea, luego texto, si quieres entre corchetes puedes añadir bordes)
            /*<<<EOS 
                dgfjaasñlg,jgvdzfsvgñaob.ahò.a`go+
            EOS;*/

            $pdf -> Cell(1,16,'Hola mi nombre es ' . $nombre) ;
            $pdf -> Ln();
            $pdf -> SetFont('Arial', '', 10);
            $pdf -> MultiCell(0,5, 'Te escribo desde la empresa ' . $empresa .' donde mi responsable es ' . $responsable . '. Te escribo por el problema con el Lorem fistrum dise usteer sexuarl pecador diodeno la cosa muy malar de la pradera llevame al sircoo caballo blanco caballo negroorl fistro. Ese que llega al ataquerl apetecan pecador. Pupita ese hombree dise usteer torpedo jarl. A gramenawer la caidita apetecan benemeritaar. Diodeno pupita amatomaa condemor ese que llega diodenoo. Fistro llevame al sircoo jarl diodeno a wan va muy cargadoo apetecan amatomaa dise usteer. Sexuarl pecador a peich al ataquerl llevame al sircoo te va a pupitaa ese hombree. ', 'J');
            $pdf -> Ln();
            $pdf -> SetFont('Arial', 'B', 12);
            $pdf -> Cell(1,16, ' En Madrid a fecha de  ' . $fecha) ;
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