<?php
    require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
    
    if(empty($idparte)){//si el id del cuaderno no esta definido o es nula nos indica que lo pongamos.
        echo "Indique el Id y los campos a modificar.";
        echo "<br><a href='../../modelo/parte/parprincipal.php'>Volver al formulario...</a>";
    }else{//Modifico todos los campos
        if(!empty($parfecha) && !empty($incidencia) && !empty($solucion) && !empty($parobs) && !empty($paridloteentrada) && !empty($paridlotesalida)){
           $consulta="UPDATE parte SET Fecha = '$parfecha', Incidencia = '$incidencia', Solucion = '$solucion', "
                   . "Observacion = '$parobs', IdLoteEntrada = '$paridloteentrada', IdLoteSalida = '$paridlotesalida' WHERE Id = '$idparte'"; 
        //Modifico todos los campos menos fecha   
        }else if(empty($parfecha) && !empty($incidencia) && !empty($solucion) && !empty($parobs) && !empty($paridloteentrada) && !empty($paridlotesalida)){
            $consulta="UPDATE parte SET Incidencia = '$incidencia', Solucion = '$solucion', "
                   . "Observacion = '$parobs', IdLoteEntrada = '$paridloteentrada', IdLoteSalida = '$paridlotesalida' WHERE Id = '$idparte'"; 
        //Modifico todos los campos menos incidencia   
        }else if(!empty($parfecha) && empty($incidencia) && !empty($solucion) && !empty($parobs) && !empty($paridloteentrada) && !empty($paridlotesalida)){
            $consulta="UPDATE parte SET Fecha = '$parfecha', Solucion = '$solucion', "
                   . "Observacion = '$parobs', IdLoteEntrada = '$paridloteentrada', IdLoteSalida = '$paridlotesalida' WHERE Id = '$idparte'"; 
        //Modifico todos los campos menos solucion 
        }else if(!empty($parfecha) && !empty($incidencia) && empty($solucion) && !empty($parobs) && !empty($paridloteentrada) && !empty($paridlotesalida)){
            $consulta="UPDATE parte SET Fecha = '$parfecha', Incidencia = '$incidencia', "
                   . "Observacion = '$parobs', IdLoteEntrada = '$paridloteentrada', IdLoteSalida = '$paridlotesalida' WHERE Id = '$idparte'"; 
        //Modifico todos los campos menos observacion
        }else if(!empty($parfecha) && !empty($incidencia) && !empty($solucion) && empty($parobs) && !empty($paridloteentrada) && !empty($paridlotesalida)){
            $consulta="UPDATE parte SET Fecha = '$parfecha', Incidencia = '$incidencia', "
                   . "Solucion = '$solucion', IdLoteEntrada = '$paridloteentrada', IdLoteSalida = '$paridlotesalida' WHERE Id = '$idparte'"; 
        //Modifico todos los campos menos lote entrada
        }else if(!empty($parfecha) && !empty($incidencia) && !empty($solucion) && !empty($parobs) && empty($paridloteentrada) && !empty($paridlotesalida)){
            $consulta="UPDATE parte SET Fecha = '$parfecha', Incidencia = '$incidencia', "
                   . "Solucion = '$solucion', Observacion = '$parobs', IdLoteSalida = '$paridlotesalida' WHERE Id = '$idparte'"; 
        //Modifico todos los campos menos lote salida
        }else if(!empty($parfecha) && !empty($incidencia) && !empty($solucion) && !empty($parobs) && !empty($paridloteentrada) && empty($paridlotesalida)){
            $consulta="UPDATE parte SET Fecha = '$parfecha', Incidencia = '$incidencia', "
                   . "Solucion = '$solucion', Observacion = '$parobs', IdLoteEntrada = '$paridloteentrada' WHERE Id = '$idparte'"; 
        //Modifico todos los campos menos fecha e incidencia
        }else if(empty($parfecha) && empty($incidencia) && !empty($solucion) && !empty($parobs) && !empty($paridloteentrada) && !empty($paridlotesalida)){
            $consulta="UPDATE parte SET Solucion = '$solucion', Observacion = '$parobs', IdLoteEntrada = '$paridloteentrada', IdLoteSalida = '$paridlotesalida' WHERE Id = '$idparte'"; 
        //Modifico todos los campos menos fecha y solucion
        }else if(empty($parfecha) && !empty($incidencia) && empty($solucion) && !empty($parobs) && !empty($paridloteentrada) && !empty($paridlotesalida)){
            $consulta="UPDATE parte SET Incidencia = '$incidencia', Observacion = '$parobs', IdLoteEntrada = '$paridloteentrada', IdLoteSalida = '$paridlotesalida' WHERE Id = '$idparte'"; 
        //Modifico todos los campos menos fecha y observacion
        }else if(empty($parfecha) && !empty($incidencia) && !empty($solucion) && empty($parobs) && !empty($paridloteentrada) && !empty($paridlotesalida)){
            $consulta="UPDATE parte SET Incidencia = '$incidencia', Solucion = '$solucion', IdLoteEntrada = '$paridloteentrada', IdLoteSalida = '$paridlotesalida' WHERE Id = '$idparte'"; 
        //Modifico todos los campos menos fecha y lote entrada
        }else if(empty($parfecha) && !empty($incidencia) && !empty($solucion) && !empty($parobs) && empty($paridloteentrada) && !empty($paridlotesalida)){
            $consulta="UPDATE parte SET Incidencia = '$incidencia', Solucion = '$solucion', Observacion = '$parobs', IdLoteSalida = '$paridlotesalida' WHERE Id = '$idparte'"; 
        //Modifico todos los campos menos fecha y lote salida
        }else if(empty($parfecha) && !empty($incidencia) && !empty($solucion) && !empty($parobs) && empty($paridloteentrada) && !empty($paridlotesalida)){
            $consulta="UPDATE parte SET Incidencia = '$incidencia', Solucion = '$solucion', Observacion = '$parobs', IdLoteEntrada = '$paridloteentrada' WHERE Id = '$idparte'"; 
        //Modifico todos los campos menos incidencia y solucion
        }else if(!empty($parfecha) && empty($incidencia) && empty($solucion) && !empty($parobs) && !empty($paridloteentrada) && !empty($paridlotesalida)){
            $consulta="UPDATE parte SET Fecha = '$parfecha', Observacion = '$parobs', IdLoteEntrada = '$paridloteentrada', IdLoteSalida = '$paridlotesalida' WHERE Id = '$idparte'"; 
        //Modifico todos los campos menos incidencia y observacion
        }else if(!empty($parfecha) && empty($incidencia) && !empty($solucion) && empty($parobs) && !empty($paridloteentrada) && !empty($paridlotesalida)){
            $consulta="UPDATE parte SET Fecha = '$parfecha', Solucion = '$solucion', IdLoteEntrada = '$paridloteentrada', IdLoteSalida = '$paridlotesalida' WHERE Id = '$idparte'"; 
        //Modifico todos los campos menos incidencia y lote entrada
        }else if(!empty($parfecha) && empty($incidencia) && !empty($solucion) && !empty($parobs) && empty($paridloteentrada) && !empty($paridlotesalida)){
            $consulta="UPDATE parte SET Fecha = '$parfecha', Solucion = '$solucion', Observacion = '$parobs', IdLoteSalida = '$paridlotesalida' WHERE Id = '$idparte'"; 
        //Modifico todos los campos menos incidencia y lote salida
        }else if(!empty($parfecha) && empty($incidencia) && !empty($solucion) && !empty($parobs) && !empty($paridloteentrada) && empty($paridlotesalida)){
            $consulta="UPDATE parte SET Fecha = '$parfecha', Solucion = '$solucion', Observacion = '$parobs', IdLoteEntrada = '$paridloteentrada' WHERE Id = '$idparte'"; 
        //Modifico todos los campos menos solucion y observacion
        }else if(!empty($parfecha) && !empty($incidencia) && empty($solucion) && empty($parobs) && !empty($paridloteentrada) && !empty($paridlotesalida)){
            $consulta="UPDATE parte SET Fecha = '$parfecha', Incidencia = '$incidencia', IdLoteEntrada = '$paridloteentrada', IdLoteSalida = '$paridlotesalida' WHERE Id = '$idparte'";  
        //Modifico todos los campos menos solucion y lote entrada
        }else if(!empty($parfecha) && !empty($incidencia) && empty($solucion) && !empty($parobs) && empty($paridloteentrada) && !empty($paridlotesalida)){
            $consulta="UPDATE parte SET Fecha = '$parfecha', Incidencia = '$incidencia', Observacion = '$parobs', IdLoteSalida = '$paridlotesalida' WHERE Id = '$idparte'";  
        //Modifico todos los campos menos solucion y lote salida
        }else if(!empty($parfecha) && !empty($incidencia) && empty($solucion) && !empty($parobs) && !empty($paridloteentrada) && empty($paridlotesalida)){
            $consulta="UPDATE parte SET Fecha = '$parfecha', Incidencia = '$incidencia', Observacion = '$parobs', IdLoteEntrada = '$paridloteentrada' WHERE Id = '$idparte'";  
        //Modifico todos los campos menos observacion y lote entrada
        }else if(!empty($parfecha) && !empty($incidencia) && !empty($solucion) && empty($parobs) && empty($paridloteentrada) && !empty($paridlotesalida)){
            $consulta="UPDATE parte SET Fecha = '$parfecha', Incidencia = '$incidencia', Solucion = '$solucion', IdLoteSalida = '$paridlotesalida' WHERE Id = '$idparte'";  
        //Modifico todos los campos menos observacion y lote salida
        }else if(!empty($parfecha) && !empty($incidencia) && !empty($solucion) && empty($parobs) && !empty($paridloteentrada) && empty($paridlotesalida)){
            $consulta="UPDATE parte SET Fecha = '$parfecha', Incidencia = '$incidencia', Solucion = '$solucion', IdLoteEntrada = '$paridloteentrada' WHERE Id = '$idparte'";  
        //Modifico todos los campos menos lote entrada y lote salida
        }else if(!empty($parfecha) && !empty($incidencia) && !empty($solucion) && !empty($parobs) && empty($paridloteentrada) && empty($paridlotesalida)){
            $consulta="UPDATE parte SET Fecha = '$parfecha', Incidencia = '$incidencia', Solucion = '$solucion', Observacion = '$parobs' WHERE Id = '$idparte'";  
        //Modifico todos los campos menos fecha, incidencia y solucion
        }else if(empty($parfecha) && empty($incidencia) && empty($solucion) && !empty($parobs) && !empty($paridloteentrada) && !empty($paridlotesalida)){
            $consulta="UPDATE parte SET Observacion = '$parobs', IdLoteEntrada = '$paridloteentrada', IdLoteSalida = '$paridlotesalida' WHERE Id = '$idparte'";  
        //Modifico todos los campos menos fecha, incidencia y observacion
        }else if(empty($parfecha) && empty($incidencia) && !empty($solucion) && empty($parobs) && !empty($paridloteentrada) && !empty($paridlotesalida)){
            $consulta="UPDATE parte SET Solucion= '$solucion', IdLoteEntrada = '$paridloteentrada', IdLoteSalida = '$paridlotesalida' WHERE Id = '$idparte'";  
        //Modifico todos los campos menos fecha, incidencia y lote entrada
        }else if(empty($parfecha) && empty($incidencia) && !empty($solucion) && !empty($parobs) && empty($paridloteentrada) && !empty($paridlotesalida)){
            $consulta="UPDATE parte SET Solucion= '$solucion', Observacion = '$parobs', IdLoteSalida = '$paridlotesalida' WHERE Id = '$idparte'";  
        //Modifico todos los campos menos fecha, incidencia y lote salida
        }else if(empty($parfecha) && empty($incidencia) && !empty($solucion) && !empty($parobs) && !empty($paridloteentrada) && empty($paridlotesalida)){
            $consulta="UPDATE parte SET Solucion= '$solucion', Observacion = '$parobs', IdLoteEntrada = '$paridloteentrada' WHERE Id = '$idparte'";  
        //Modifico todos los campos menos incidencia, solucion y observacion
        }else if(!empty($parfecha) && empty($incidencia) && empty($solucion) && empty($parobs) && !empty($paridloteentrada) && !empty($paridlotesalida)){
            $consulta="UPDATE parte SET Fecha = '$parfecha', IdLoteEntrada = '$paridloteentrada', IdLoteSalida = '$paridlotesalida' WHERE Id = '$idparte'";  
        //Modifico todos los campos menos incidencia, solucion y lote entrada
        }else if(!empty($parfecha) && empty($incidencia) && empty($solucion) && !empty($parobs) && empty($paridloteentrada) && !empty($paridlotesalida)){
            $consulta="UPDATE parte SET Fecha = '$parfecha', Observacion = '$parobs', IdLoteSalida = '$paridlotesalida' WHERE Id = '$idparte'";  
        //Modifico todos los campos menos incidencia, solucion y lote salida
        }else if(!empty($parfecha) && empty($incidencia) && empty($solucion) && !empty($parobs) && !empty($paridloteentrada) && empty($paridlotesalida)){
            $consulta="UPDATE parte SET Fecha = '$parfecha', Observacion = '$parobs', IdLoteEntrada = '$paridloteentrada' WHERE Id = '$idparte'";  
        //Modifico todos los campos menos solucion, observacion y fecha
        }else if(empty($parfecha) && !empty($incidencia) && empty($solucion) && empty($parobs) && !empty($paridloteentrada) && !empty($paridlotesalida)){
            $consulta="UPDATE parte SET Incidencia = '$incidencia', IdLoteEntrada = '$paridloteentrada', IdLoteSalida = '$paridlotesalida' WHERE Id = '$idparte'";   
        //Modifico todos los campos menos solucion, observacion y lote entrada
        }else if(!empty($parfecha) && !empty($incidencia) && empty($solucion) && empty($parobs) && empty($paridloteentrada) && !empty($paridlotesalida)){
            $consulta="UPDATE parte SET Fecha = '$parfecha', Incidencia = '$incidencia', IdLoteSalida = '$paridlotesalida' WHERE Id = '$idparte'";   
        //Modifico todos los campos menos solucion, observacion y lote salida
        }else if(!empty($parfecha) && !empty($incidencia) && empty($solucion) && empty($parobs) && !empty($paridloteentrada) && empty($paridlotesalida)){
            $consulta="UPDATE parte SET Fecha = '$parfecha', Incidencia = '$incidencia', IdLoteEntrada = '$paridloteentrada' WHERE Id = '$idparte'";   
        //Modifico todos los campos menos observacion, lote entrada y fecha
        }else if(empty($parfecha) && !empty($incidencia) && !empty($solucion) && empty($parobs) && empty($paridloteentrada) && !empty($paridlotesalida)){
            $consulta="UPDATE parte SET Incidencia = '$incidencia', Solucion = '$solucion', IdLoteSalida = '$paridlotesalida' WHERE Id = '$idparte'";   
        //Modifico todos los campos menos observacion, lote entrada y incidencia
        }else if(!empty($parfecha) && empty($incidencia) && !empty($solucion) && empty($parobs) && empty($paridloteentrada) && !empty($paridlotesalida)){
            $consulta="UPDATE parte SET Fecha = '$parfecha', Solucion = '$solucion', IdLoteSalida = '$paridlotesalida' WHERE Id = '$idparte'";   
        //Modifico todos los campos menos observacion, lote entrada y lote salida
        }else if(!empty($parfecha) && !empty($incidencia) && !empty($solucion) && empty($parobs) && empty($paridloteentrada) && empty($paridlotesalida)){
            $consulta="UPDATE parte SET Fecha = '$parfecha', Incidencia = '$incidencia', Solucion = '$solucion' WHERE Id = '$idparte'";   
        //Modifico todos los campos menos lote entrada, lote salida y fecha
        }else if(empty($parfecha) && !empty($incidencia) && !empty($solucion) && !empty($parobs) && empty($paridloteentrada) && empty($paridlotesalida)){
            $consulta="UPDATE parte SET Incidencia = '$incidencia', Solucion = '$solucion', Observacion = '$parobs' WHERE Id = '$idparte'"; 
        //Modifico todos los campos menos lote entrada, lote salida y incidencia
        }else if(!empty($parfecha) && empty($incidencia) && !empty($solucion) && !empty($parobs) && empty($paridloteentrada) && empty($paridlotesalida)){
            $consulta="UPDATE parte SET Fecha = '$parfecha', Solucion = '$solucion', Observacion = '$parobs' WHERE Id = '$idparte'"; 
        //Modifico todos los campos menos lote entrada, lote salida y solucion
        }else if(!empty($parfecha) && !empty($incidencia) && empty($solucion) && !empty($parobs) && empty($paridloteentrada) && empty($paridlotesalida)){
            $consulta="UPDATE parte SET Fecha = '$parfecha', Incidencia = '$incidencia', Observacion = '$parobs' WHERE Id = '$idparte'"; 
        //Modifico todos los campos menos fecha, incidencia, solucion y observacion
        }else if(empty($parfecha) && empty($incidencia) && empty($solucion) && empty($parobs) && !empty($paridloteentrada) && !empty($paridlotesalida)){
            $consulta="UPDATE parte SET IdLoteEntrada ='$paridloteentrada', IdLoteSalida = '$paridlotesalida' WHERE Id = '$idparte'"; 
        //Modifico todos los campos menos fecha, incidencia, solucion y lote entrada
        }else if(empty($parfecha) && empty($incidencia) && empty($solucion) && !empty($parobs) && empty($paridloteentrada) && !empty($paridlotesalida)){
            $consulta="UPDATE parte SET Observacion ='$parobs', IdLoteSalida = '$paridlotesalida' WHERE Id = '$idparte'"; 
        //Modifico todos los campos menos fecha, incidencia, solucion y lote salida
        }else if(empty($parfecha) && empty($incidencia) && empty($solucion) && !empty($parobs) && !empty($paridloteentrada) && empty($paridlotesalida)){
            $consulta="UPDATE parte SET Observacion ='$parobs', IdLoteEntrada = '$paridloteentrada' WHERE Id = '$idparte'"; 
        //Modifico todos los campos menos incidencia, solucion, observacion y lote entrada
        }else if(!empty($parfecha) && empty($incidencia) && empty($solucion) && empty($parobs) && empty($paridloteentrada) && !empty($paridlotesalida)){
            $consulta="UPDATE parte SET Fecha ='$parfecha', IdLoteSalida = '$paridlotesalida' WHERE Id = '$idparte'"; 
        //Modifico todos los campos menos incidencia, solucion, observacion y lote salida
        }else if(!empty($parfecha) && empty($incidencia) && empty($solucion) && empty($parobs) && !empty($paridloteentrada) && empty($paridlotesalida)){
            $consulta="UPDATE parte SET Fecha ='$parfecha', IdLoteEntrada = '$paridloteentrada' WHERE Id = '$idparte'"; 
        //Modifico todos los campos menos solucion, observacion, lote entrada y fecha
        }else if(empty($parfecha) && !empty($incidencia) && empty($solucion) && empty($parobs) && empty($paridloteentrada) && !empty($paridlotesalida)){
            $consulta="UPDATE parte SET Incidencia ='$incidencia', IdLoteSalida = '$paridlotesalida' WHERE Id = '$idparte'"; 
        //Modifico todos los campos menos solucion, observacion, lote entrada y lote salida
        }else if(!empty($parfecha) && !empty($incidencia) && empty($solucion) && empty($parobs) && empty($paridloteentrada) && empty($paridlotesalida)){
            $consulta="UPDATE parte SET Fecha = '$parfecha', Incidencia ='$incidencia' WHERE Id = '$idparte'"; 
        //Modifico todos los campos menos observacion, lote entrada, lote salida y fecha 
        }else if(empty($parfecha) && !empty($incidencia) && !empty($solucion) && empty($parobs) && empty($paridloteentrada) && empty($paridlotesalida)){
            $consulta="UPDATE parte SET Incidencia ='$incidencia', Solucion = '$solucion' WHERE Id = '$idparte'"; 
        //Modifico todos los campos menos observacion, lote entrada, lote salida y incidencia
        }else if(!empty($parfecha) && empty($incidencia) && !empty($solucion) && empty($parobs) && empty($paridloteentrada) && empty($paridlotesalida)){
            $consulta="UPDATE parte SET Fecha ='$parfecha', Solucion = '$solucion' WHERE Id = '$idparte'"; 
        //Modifico lote salida
        }else if(empty($parfecha) && empty($incidencia) && empty($solucion) && empty($parobs) && empty($paridloteentrada) && !empty($paridlotesalida)){
            $consulta="UPDATE parte SET IdLoteSalida = '$paridlotesalida' WHERE Id = '$idparte'"; 
        //Modifico lote entrada
        }else if(empty($parfecha) && empty($incidencia) && empty($solucion) && empty($parobs) && !empty($paridloteentrada) && empty($paridlotesalida)){
            $consulta="UPDATE parte SET IdLoteEntrada = '$paridloteentrada' WHERE Id = '$idparte'"; 
        //Modifico lote observacion
        }else if(empty($parfecha) && empty($incidencia) && empty($solucion) && !empty($parobs) && empty($paridloteentrada) && empty($paridlotesalida)){
            $consulta="UPDATE parte SET Observacion = '$parobs' WHERE Id = '$idparte'"; 
        //Modifico lote solucion
        }else if(empty($parfecha) && empty($incidencia) && !empty($solucion) && empty($parobs) && empty($paridloteentrada) && empty($paridlotesalida)){
            $consulta="UPDATE parte SET Solucion = '$solucion' WHERE Id = '$idparte'"; 
        //Modifico lote incidencia
        }else if(empty($parfecha) && !empty($incidencia) && empty($solucion) && empty($parobs) && empty($paridloteentrada) && empty($paridlotesalida)){
            $consulta="UPDATE parte SET Incidencia = '$incidencia' WHERE Id = '$idparte'"; 
        //Modifico lote fecha
        }else{
           $consulta="UPDATE parte SET Fecha = '$parfecha' WHERE Id = '$idparte'"; 
        }
        
        //guardamos el resultado de la consulta y volvemos a la pagina del formulario
        $resultado = $conexion -> query($consulta);
        header("Location:../../modelo/parte/parprincipal.php");
    }//fin else
?>

