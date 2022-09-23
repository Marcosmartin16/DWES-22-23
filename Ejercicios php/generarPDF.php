<?php

    require('fpdf184/fpdf.php');

    $pdf = new FPDF();
    $pdf -> AddPage();
    $pdf -> SetFont('Arial', 'B', 18);
    $pdf -> Cell(60,20,'hola klk');

    $pdf -> Output();
?>