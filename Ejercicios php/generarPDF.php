<?php

    ob_end_clear();
    require('doc118-html-hu/fpdf.php'):

    $pdf = new FPDF();
    $pdf -> AddPage();
    $odf -> SetFont('Arial', 'B', 18);
    $pdf -> Cell(60,20,'hola klk');

    $pdf -> Output();
?>