<?php
    require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
    
    if(empty($idlinea)){//si el id de la linea no esta definido o es nula nos indica que lo pongamos.
        echo "Indique el Id y los campos a modificar.";
        echo "<br><a href='../../modelo/linea/linprincipal.php'>Volver al formulario...</a>";
    }else{//Modifico todos los campos
        if(!empty($linea) && !empty($linobs)){
           $consulta="UPDATE formato SET Linea = '$linea', Observaciones = '$linobs' WHERE Id = '$idlinea'"; 
        //Modifico solo linea
        }else if(!empty($linea) && empty($linobs)){
           $consulta="UPDATE formato SET Linea = '$linea' WHERE Id = '$idlinea'";
        //Modifico solo observaciones   
        }else{
           $consulta="UPDATE formato SET Observaciones = '$linobs' WHERE Id = '$idlinea'"; 
        }
        
        //guardamos el resultado de la consulta y volvemos a la pagina del formulario
        $resultado = $conexion -> query($consulta);
        header("Location:../../modelo/linea/linprincipal.php");
    }//fin else
?>

