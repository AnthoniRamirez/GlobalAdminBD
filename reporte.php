<?php
    require("fpdf/fpdf.php");
    require("conexion.php");
    date_default_timezone_set('America/Mexico_City');
    $fechaACT = date ('Y-m-d');

    $query1 = "SELECT det.id_pedido,det.unidades,cli.nombre as nombrecliente, cli.apellido,
    cli.colonia AS calleCLI, cli.calle AS coloniaCLI, cli.estado AS EDOcli, cli.telefono AS celCLI,
    cli.correo AS MAILcli, det.fecha, prod.nombre AS NOMpro, pro.rfc_provedor, pro.nombre as nombreproveedor,pro.colonia AS coloniaPRO,
    pro.calle AS callePRO, pro.estado AS EDOpro, pro.telefono AS CELpro
    FROM detalle_venta AS det
    JOIN cliente AS cli
    ON det.id_cliente=cli.id_cleinte
    JOIN provedor AS pro
    ON det.id_provedor = pro.id_provedor
    JOIN producto AS prod
    ON det.id_producto = prod.id_producto";

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
    $pdf->Cell(80,10,'Proveedor',1,1,'C');

    $resultado = $conex->query($query1);

        
        foreach($resultado as $row){
            $pdf->Cell(15,10,$row['id_pedido'],1,0);
            $pdf->Cell(30,10,$row['fecha'],1,0);
            $pdf->SetFont('Arial','',8);
            $pdf->Cell(50,10,$row['NOMpro'],1,0);
            $pdf->SetFont('Arial','',14);
            $pdf->Cell(25,10,$row['unidades'],1,0,'C');
            $pdf->SetFont('Arial','',12);
            $pdf->Cell(80,10,$row['nombrecliente']."".$row['apellido'],1,0,'C');
            $pdf->SetFont('Arial','',14);
            $pdf->Cell(80,10,$row['nombreproveedor'],1,1,'C');
        }



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