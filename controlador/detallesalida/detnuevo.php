<?php
    require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
    include_once '../../controlador/funciones.php';
    
    if(empty($detidloteentrada) || empty($detfecha) || empty($horaentrada) || empty($detidlinea)){
        echo "Los campos con * son imprescindibles.<br>";
        echo "<br><a href='detprincipal.php'> Volver al formulario...</a>";
    }else{
        //Pongo valor a kilos y hora salida en caso de que esten vacios
        if(empty($kgutilizados)){
            $kgutilizados=0;
        }
        if(empty($horasalida)){
            $horasalida="00:00:00";
        }
        
        //convierto la fecha a formato mysql
        $detfecha= normal_mysql($detfecha);
        
        $consulta="INSERT INTO detallesalida (IdLoteEntrada, Fecha, LineaEnvasado, HoraEntrada, Horasalida, KgUtilizados, Observaciones) VALUES "
                . "('$detidloteentrada', '$detfecha', '$detidlinea', '$horaentrada', '$horasalida', '$kgutilizados', '$detobs')";
        
        if($resultado=$conexion -> query($consulta)){
            header('Location:detprincipal.php');
        }else{
            echo 'Los datos no se han introducido correctamente.<br>'; 
            echo "Error: ". $consulta. "<br>" .mysqli_errno($conexion);
        }
        
        echo  '<br><a href="detprincipal.php">Volver al formulario</a>';
    }
?>

