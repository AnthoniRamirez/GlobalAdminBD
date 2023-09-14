<?php
    require("fpdf/fpdf.php");
    require("conexion.php");
    date_default_timezone_set('America/Mexico_City');
    $fechaACT = date ('Y-m-d');

    $pdf = new FPDF('L');
    $pdf->AddPage();
    $pdf->SetFont('Arial','',14);
    $pdf->Cell(0,10,'Reporte Ventas',0,1,'C');
    $pdf->Cell(0,10,'Generado Por Marco Antonio',0,1,'C');
    $pdf->Cell(0,10,'En La Siguiente Tabla, Observara Todos Los Servicios Y Cargos De Habitacion',0,1,'C');
    $pdf->Image("SamsungLogo.png",15,10,60);
    $pdf->Image('SamsLogo.png',220,10,60);
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(0,10,'Fecha:'.$fechaACT,0,1,'R');
    $pdf->Cell(10,10,'',0,1);

    $pdf->Cell(15,10,'NO',1,0,'C');
    $pdf->Cell(30,10,'Fecha',1,0,'C');
    $pdf->Cell(50,10,'Producto',1,0,'C');
    $pdf->Cell(25,10,'Unidades',1,0,'C');
    $pdf->Cell(80,10,'Cliente',1,0,'C');
    $pdf->Cell(80,10,'Proveedor',1,0,'C');



    // $pdf->Cell(40,10,utf8_decode('Hola Mundo'),1);
    // $pdf->Cell(40,10,utf8_decode('Hola Mundo'),1,2);
    // $pdf->Cell(40,10,utf8_decode('Hola Mundo'),1,1);
    // $pdf->Cell(40,10,utf8_decode('Hola Mundo'),1,1);
    // $pdf->Cell(40,10,utf8_decode('Hola Mundo'),1,);
    // $pdf->Cell(40,10,utf8_decode('Hola Mundo'),1,2);
    // $pdf->Cell(40,10,utf8_decode('Hola Mundo'),1,);
    // $pdf->Cell(40,10,utf8_decode(''),9);
    // $pdf->Cell(40,10);
    $pdf->Output();
    
?>