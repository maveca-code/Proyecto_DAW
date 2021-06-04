<?php
    require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
    
    if(empty($idtratamiento)){//si el id del cuaderno no esta definido o es nula nos indica que lo pongamos.
        echo "Indique el Id y los campos del cuaderno a modificar.";
        echo "<br><a href='../../modelo/tratamiento/traprincipal.php'>Volver al formulario...</a>";
    }else{//Modifico todos los campos
        if(!empty($trafecha) && !empty($traidcuaderno) && !empty($tratamiento) && !empty($traobs)){
           $consulta="UPDATE tratamiento SET Fecha = '$trafecha', IdCuaderno = '$traidcuaderno', Tratamiento = '$tratamiento', Observaciones = '$traobs' WHERE Id = '$idtratamiento'"; 
        //Modifico todos los campos menos fecha   
        }else if(empty($trafecha) && !empty($traidcuaderno) && !empty($tratamiento) && !empty($traobs)){
           $consulta="UPDATE tratamiento SET IdCuaderno = '$traidcuaderno', Tratamiento = '$tratamiento', Observaciones = '$traobs' WHERE Id = '$idtratamiento'";
        //Modifico todos los campos menos cuaderno   
        }else if(!empty($trafecha) && empty($traidcuaderno) && !empty($tratamiento) && !empty($traobs)){
            $consulta="UPDATE tratamiento SET Fecha = '$trafecha', Tratamiento = '$tratamiento', Observaciones = '$traobs' WHERE Id = '$idtratamiento'";
        //Modifico todos los campos menos tratamiento
        }else if(!empty($trafecha) && !empty($traidcuaderno) && empty($tratamiento) && !empty($traobs)){
            $consulta="UPDATE tratamiento SET Fecha = '$trafecha', Fecha = '$trafecha', Observaciones = '$traobs' WHERE Id = '$idtratamiento'";
        //Modifico todos los campos menos observaciones
        }else if(!empty($trafecha) && !empty($traidcuaderno) && !empty($tratamiento) && empty($traobs)){
            $consulta="UPDATE tratamiento SET Fecha = '$trafecha', Fecha = '$trafecha', Tratamiento = '$tratamiento' WHERE Id = '$idtratamiento'";
        //Modifico todos los campos menos fecha y cuaderno
        }else if(empty($trafecha) && empty($traidcuaderno) && !empty($tratamiento) && !empty($traobs)){
            $consulta="UPDATE tratamiento SET Tratamiento = '$tratamiento', Observaciones = '$traobs' WHERE Id = '$idtratamiento'";
        //Modifico todos los campos menos fecha y tratamiento
        }else if(empty($trafecha) && !empty($traidcuaderno) && empty($tratamiento) && !empty($traobs)){
            $consulta="UPDATE tratamiento SET IdCuaderno = '$traidcuaderno', Observaciones = '$traobs' WHERE Id = '$idtratamiento'";
        //Modifico todos los campos menos fecha y observaciones
        }else if(empty($trafecha) && !empty($traidcuaderno) && !empty($tratamiento) && empty($traobs)){
            $consulta="UPDATE tratamiento SET IdCuaderno = '$traidcuaderno', Tratamiento = '$tratamiento' WHERE Id = '$idtratamiento'";
        //Modifico todos los campos menos cuaderno y tratamiento
        }else if(!empty($trafecha) && empty($traidcuaderno) && empty($tratamiento) && !empty($traobs)){
            $consulta="UPDATE tratamiento SET Fecha = '$trafecha', Observaciones = '$traobs' WHERE Id = '$idtratamiento'";
        //Modifico todos los campos menos cuaderno y observaciones
        }else if(!empty($trafecha) && empty($traidcuaderno) && !empty($tratamiento) && empty($traobs)){
            $consulta="UPDATE tratamiento SET Fecha = '$trafecha', Tratamiento = '$tratamiento' WHERE Id = '$idtratamiento'";
        //Modifico todos los campos menos tratamiento y observaciones
        }else if(!empty($trafecha) && !empty($traidcuaderno) && empty($tratamiento) && empty($traobs)){
            $consulta="UPDATE tratamiento SET Fecha = '$trafecha', IdCuaderno = '$traidcuaderno' WHERE Id = '$idtratamiento'";
        //Modifico solo observaciones
        }else if(empty($trafecha) && empty($traidcuaderno) && empty($tratamiento) && !empty($traobs)){
            $consulta="UPDATE tratamiento SET Observaciones = '$traobs' WHERE Id = '$idtratamiento'";
        //Modifico solo tratamiento
        }else if(empty($trafecha) && empty($traidcuaderno) && !empty($tratamiento) && empty($traobs)){
            $consulta="UPDATE tratamiento SET Tratamiento = '$tratamiento' WHERE Id = '$idtratamiento'";
        //Modifico solo cuaderno
        }else if(empty($trafecha) && empty($traidcuaderno) && !empty($tratamiento) && empty($traobs)){
            $consulta="UPDATE tratamiento SET IdCuaderno = '$traidcuaderno' WHERE Id = '$idtratamiento'";
        //Modifico solo fecha
        }else{
           $consulta="UPDATE tratamiento SET Fecha = '$trafecha' WHERE Id = '$idtratamiento'"; 
        }
        
        //guardamos el resultado de la consulta y volvemos a la pagina del formulario
        $resultado = $conexion -> query($consulta);
        header("Location:../../modelo/tratamiento/traprincipal.php");
    }//fin else 
?>

