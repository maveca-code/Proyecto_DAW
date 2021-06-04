<?php
    require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
    require_once ('../../vista/fpdf/fpdf.php');
    define('FPDF_FONTPATH','../../vista/fpdf/font/');

    @$idlotesalida=$_POST['idlotesalida'];
    @$fecha=$_POST['fecha'];
    @$comprador=$_POST['comprador'];
    @$articulo=$_POST['articulo'];

    @$titulo=" Comprador: $comprador, fecha: $fecha, y lote de salida $idlotesalida"; 
    
    $consulta="SELECT p.bruto AS bruto, t.tara AS tara, bruto-tara AS neto, CONCAT(f.envase,',',p.piezas,'piezas')AS formatopiezas, p.bultos AS bultos, "
            . "p.observaciones AS observaciones, p.id AS idpale FROM pale p JOIN formato f ON p.idformato=f.id WHERE p.lotesalida='$idlotesalida' ORDER BY formatopiezas";
    $resultado=$conexion -> query($consulta);
    
    class PDF extends FPDF{
        //Cabecera del documento
        function Header() {
            global $titulo;
            global $resultado;
            global $articulo;
            $this->SetFont('Times','B',16);
            $this->Cell(200,0,$titulo,0,0,'C');
            $this->Ln(6);
            $this->Cell(200,0,$articulo,0,0,'C');
            $this->Ln(8);
            
            $this->SetFont('Arial','B',14);
            $long=array();
            $campos=mysqli_num_fields($resultado);  //obtengo el numero de campos afectados
            $long=array(15,15,15,75,15,45);
            //creo el encabezamiento con el nombre de los campos, pongo un campo menos porque el idpale no lo mostrare
            for($i=0;$i<$campos-1;$i++){ 
                $nombrecampo=mysqli_fetch_field_direct($resultadoSQL,$i);
                $this->Cell($long[$i],0,$nombrecampo,0,0,'C');
            }
		
            $posy=$this->GetY();
            $this->SetDrawColor(255,0,0);
            $this->SetLineWidth(0.6);
            $this->Line(10, $posy+3, 200, $posy+3);
            $this->SetY($posy+10);
		
        }
    }//fin clase PDF
    
    $pdf=new PDF('P','mm','A4');
    $pdf->AddPage();
    $pdf->SetFont('Arial','',12);
    
    $contador=0;
    while ($registro=mysql_fetch_array($result,MYSQL_NUM)){
	if ($contador==0){
            $sumaneto=0;
            $pdf->Cell(15,0,$registro[0],0,0,'R');//Bruto
            $pdf->Cell(15,0,$registro[1],0,0,'R');//Tara
            $pdf->Cell(15,0,$registro[2],0,0,'R');//Neto
            $pdf->Cell(75,0,$registro[3]);//Formatopiezas
            $pdf->Cell(10,0,$registro[4]);//Bultos
            $pdf->Cell(10,0,"".$registro[5]."  Id: ".$registro[6]."");//Obs y nº pale
            $posy=$pdf->GetY();
            $pdf->SetY($posy+5);
            $palets=1;
            $contador=1;
            $indice=$registro[3];
            $sumaneto=$sumaneto+$registro[2];
	}else{  
            if ($indice==$registro[3]){
                $pdf->Cell(15,0,$registro[0],0,0,'R');//Bruto
                $pdf->Cell(15,0,$registro[1],0,0,'R');//Tara
                $pdf->Cell(15,0,$registro[2],0,0,'R');//Neto
                $pdf->Cell(75,0,$registro[3]);//Formatopiezas
                $pdf->Cell(10,0,$registro[4]);//Bultos
                $pdf->Cell(10,0,"".$registro[5]."  Id: ".$registro[6]."");//Obs y nº pale
                $posy=$pdf->GetY();
                $pdf->SetY($posy+5);
                $palets++;
                $sumaneto+=$registro[2];
            }else{
            // TOTAL 
                $pdf->SetFont('Arial','B',12);
                $pdf->Cell(30,0,'TOTAL');//Cojo dos celdas
                $pdf->Cell(15,0,$sumaneto,0,0,'R');
                $pdf->Cell(75,0,$indice);
                $pdf->Cell(10,0,$palets);
                $pdf->Cell(15,0,'palets');
			
                $pdf->SetFont('Arial','',12);
                $posy=$pdf->GetY();
                $pdf->SetY($posy+10);
                $indice=$registro[3];
                $pdf->Cell(15,0,$registro[0],0,0,'R');//Bruto
                $pdf->Cell(15,0,$registro[1],0,0,'R');//Tara
                $pdf->Cell(15,0,$registro[2],0,0,'R');//Neto
                $pdf->Cell(75,0,$registro[3]);//Formatopiezas
                $pdf->Cell(10,0,$registro[4]);//Bultos
                $pdf->Cell(10,0,"".$registro[5]."  Id: ".$registro[6]."");//Obs y nº pale
                $posy=$pdf->GetY();
                $pdf->SetY($posy+5);
                $sumaneto=$registro[2];
                $palets=1;
            }
	}
    }//fin while
	
	// TOTAL
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(30,0,'TOTAL');//Cojo dos celdas
    $pdf->Cell(15,0,$sumaneto,0,0,'R');
    $pdf->Cell(75,0,$indice);
    $pdf->Cell(10,0,$palets);
    $pdf->Cell(15,0,'palets');


    $posy=$pdf->GetY();
    $pdf->SetY($posy+5);
    
    $pdf->Output();
    
?>

