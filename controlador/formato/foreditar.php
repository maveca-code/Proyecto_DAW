<?php
    require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
    
    if(empty($idformato)){//si el id del formato no esta definido o es nula nos indica que lo pongamos.
        echo "Indique el Id y los campos del cuaderno a modificar.";
        echo "<br><a href='../../modelo/formato/forprincipal.php'>Volver al formulario...</a>";
    }else{//Modifico todos los campos
        if(!empty($envase) && !empty($peso) && !empty($forobs)){
           $consulta="UPDATE formato SET Envase = '$envase', Peso = '$peso', Observaciones = '$forobs' WHERE Id = '$idformato'"; 
        //Modifico todos los campos menos envase
        }else if(empty($envase) && !empty($peso) && !empty($forobs)){
            $consulta="UPDATE formato SET Peso = '$peso', Observaciones = '$forobs' WHERE Id = '$idformato'"; 
        //Modifico todos los campos menos peso
        }else if(!empty($envase) && empty($peso) && !empty($forobs)){
            $consulta="UPDATE formato SET Envase = '$envase', Observaciones = '$forobs' WHERE Id = '$idformato'"; 
        //Modifico todos los campos menos observaciones
        }else if(!empty($envase) && !empty($peso) && empty($forobs)){
            $consulta="UPDATE formato SET Envase = '$envase', Peso = '$peso' WHERE Id = '$idformato'"; 
        //Modifico observaciones
        }else if(empty($envase) && empty($peso) && !empty($forobs)){
            $consulta="UPDATE formato SET Observaciones = '$forobs' WHERE Id = '$idformato'"; 
        //Modifico peso
        }else if(empty($envase) && !empty($peso) && empty($forobs)){
            $consulta="UPDATE formato SET Peso = '$peso' WHERE Id = '$idformato'"; 
        //Modifico envase
        }else{
            $consulta="UPDATE formato SET Envase = '$envase' WHERE Id = '$idformato'";
        }
        
        //guardamos el resultado de la consulta y volvemos a la pagina del formulario
        $resultado = $conexion -> query($consulta);
        header("Location:../../modelo/formato/forprincipal.php");
    }//fin else
?>

