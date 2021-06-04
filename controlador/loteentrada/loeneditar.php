<?php
    require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
    include '../../controlador/funciones.php';
    if(empty($fechaentrada) || empty($loenidcuaderno) || empty($horaentrada) || empty($loenidarticulo)){
        echo 'Los campos con * son imprescindibles.';
        echo "<br><a href='../../modelo/loteentrada/loenprincipal.php'>Volver al formulario...</a>";
        
    }else{
        if(empty($gastado)){
            $gastado=0;
        }
        
        $fechaentrada=normal_mysql($fechaentrada);
        $fechasalida=normal_mysql($fechasalida);
        
        
        $consulta="UPDATE loteentrada SET FechaEntrada='$fechaentrada', HoraEntrada='$horaentrada', PesoBruto='$pesobruto', PesoTara='$pesotara', Bultos='$bultos', "
                . "IdArticulo='$loenidarticulo', Descuento='$descuento', IdCuaderno='$loenidcuaderno', Transportista='$transportista', Matricula='$matricula', "
                . "Gastado='$gastado', FechaSalida='$fechasalida', HoraSalida='$horasalida', Referencia='$sureferencia', Observaciones='$loenobs' WHERE Id='$idloteentrada'";
        $resultado=$conexion->query($consulta); 
        
    }
?>

