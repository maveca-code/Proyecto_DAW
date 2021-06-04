<?php
    require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
   
    if(isset($_GET["vermas"])){
        $consulta="SELECT l.id AS Id, l.fechaentrada AS FechaEntrada, l.horaentrada AS HoraEntrada, CONCAT(z.zona,' ',ag.apodo,' ',f.paraje) AS Agricultor, a.articulo AS Articulo, 
            l.pesobruto AS Bruto, l.pesotara AS Tara, l.bultos AS Bultos, l.descuento AS Descuento, l.idCuaderno, l.transportista AS Transporte,l.matricula AS Matricula,l.gastado 
            AS Gastado,l.fechasalida AS Fechasalida,l.horasalida AS HoraSalida,l.referencia AS SuReferencia,l.observaciones AS Obs
            FROM loteentrada l JOIN cuaderno c ON c.id=l.idcuaderno JOIN finca f ON f.id=c.idfinca JOIN agricultor ag ON ag.id=c.idagricultor 
            JOIN articulo a ON a.id=l.idarticulo JOIN zona z ON z.id=ag.zona WHERE l.id >={$_GET["vermas"]} ORDER BY Id ASC LIMIT 11";
    }else{
        $consulta="SELECT l.id AS Id, l.fechaentrada AS FechaEntrada, l.horaentrada AS HoraEntrada, CONCAT(z.zona,' ',ag.apodo,' ',f.paraje) AS Agricultor, a.articulo AS Articulo,
            l.pesobruto AS Bruto, l.pesotara AS Tara, l.bultos AS Bultos, l.descuento AS Descuento, l.idCuaderno, l.transportista AS Transporte,l.matricula AS Matricula,l.gastado 
            AS Gastado,l.fechasalida AS Fechasalida,l.horasalida AS HoraSalida,l.referencia AS SuReferencia,l.observaciones AS Obs
            FROM loteentrada l JOIN cuaderno c ON c.id=l.idcuaderno JOIN finca f ON f.id=c.idfinca JOIN agricultor ag ON ag.id=c.idagricultor 
            JOIN articulo a ON a.id=l.idarticulo JOIN zona z ON z.id=ag.zona ORDER BY Id ASC LIMIT 11";
    }
    
    $resultado=$conexion->query($consulta);
    $num_filas=0;
?>

