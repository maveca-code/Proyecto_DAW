<?php
    $idpale=$_POST['idpale'];
    $comprador=$_POST['comprador'];
    $localidad=$_POST['localidad'];
    $direccion=$_POST['direccion'];
    $producto=$_POST['producto'];
    $bruto=$_POST['bruto'];
    $tara=$_POST['tara'];
    $neto=$_POST['neto'];
    $bultos=$_POST['bultos'];
    $piezas=$_POST['piezas'];
    $idlotesalida=$_POST['idlotesalida'];
    $fechasalida=$_POST['fechasalida'];
    $idlotesalida.= "/ $idpale / $fechasalida";

    //define('FPDF_FONTPATH','../fpdf/font/');
    require_once ('../../vista/fpdf/fpdf.php');


    $pdf=new FPDF('P','mm','A5');
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    $pdf->SetAutoPageBreak(0, 0.5);

    $pdf->SetXY(20,26.2);
    $pdf->Write(5,'Comprador:');
    $pdf->Ln();
    $pdf->SetXY(30,30);
    $pdf->Cell(25,10,$comprador);

    $pdf->SetXY(20,38.2);
    $pdf->Write(10,'Localidad:');
    $pdf->Ln();
    $pdf->SetXY(30,44);
    $pdf->Cell(100,10,$localidad);

    $pdf->SetXY(20,50);
    $pdf->Write(12,'Direccion:');
    $pdf->Ln();
    $pdf->SetXY(30,57);
    $pdf->Cell(5,10,$direccion);

    $pdf->SetXY(20,60);
    $pdf->Write(15,'Fecha:');
    $pdf->SetXY(30,70);
    $pdf->Cell(25,10,$fechasalida);

    $pdf->SetXY(20,75);
    $pdf->Write(15,'Bruto:');
    $pdf->SetXY(30,85);
    $pdf->Cell(80,10,$bruto);

    $pdf->SetXY(20,90);
    $pdf->Write(15,'Tara:');
    $pdf->SetXY(30,100);
    $pdf->Cell(80,10,$tara);

    $pdf->SetXY(20,105);
    $pdf->Write(15,'Neto:');
    $pdf->SetXY(30,115);
    $pdf->Cell(80,10,$neto);

    $pdf->SetXY(20,120);
    $pdf->Write(15,'Bultos:');
    $pdf->SetXY(30,128);
    $pdf->Cell(55,10,$bultos);
    
    $pdf->SetXY(20,132);
    $pdf->Write(15,'Piezas:');
    $pdf->SetXY(30,140);
    $pdf->Cell(10,10,$piezas);

    $pdf->SetXY(20,148);
    $pdf->Write(15,'Id Lote Salida:');
    $pdf->SetXY(35,157);
    $pdf->Cell(80,10,$idlotesalida);

    $pdf->SetXY(20,163);
    $pdf->Write(15,'Producto:');
    $pdf->SetXY(30,172);
    $pdf->Cell(10,10,$producto);

    $pdf->Output();
?>