<?php
 require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
    
    if(empty($idagricultor)){//si el id del agricultor no esta definido o es nula nos indica que lo pongamos.
        echo "Indique el Id y los campos del agricultor a modificar.";
        echo "<br><a href='../../modelo/agricultor/agriprincipal.php'>Volver al formulario...</a>";
    }else{//Pongo todas las opciones de modificación de la tabla.
        //Actualizo todos los campos
        if(!empty($termino) && !empty($finprovincia) && !empty($parcela) && !empty($finobs)){
            $consulta = "UPDATE finca SET Termino = '$termino', Provincia = '$finprovincia', Parcela = '$parcela', Observaciones = '$finobs' WHERE Id = '$idfinca'";
        //Actualizo todo menos termino    
        }else if(empty($termino) && !empty($finprovincia) && !empty($parcela) && !empty($finobs)){
           $consulta = "UPDATE finca SET Provincia = '$finprovincia', Parcela = '$parcela', Observaciones = '$finobs' WHERE Id = '$idfinca'"; 
        //Actualizo todo menos provincia
        }else if(!empty($termino) && empty($finprovincia) && !empty($parcela) && !empty($finobs)){
           $consulta = "UPDATE finca SET Termino = '$termino', Parcela = '$parcela', Observaciones = '$finobs' WHERE Id = '$idfinca'"; 
        //Actualizo todo menos parcela
        }else if(!empty($termino) && !empty($finprovincia) && empty($parcela) && !empty($finobs)){
           $consulta = "UPDATE finca SET Termino = '$termino', Provincia = '$finprovincia', Observaciones = '$finobs' WHERE Id = '$idfinca'"; 
        //Actualizo todo menos observaciones
        }else if(!empty($termino) && !empty($finprovincia) && !empty($parcela) && empty($finobs)){
           $consulta = "UPDATE finca SET Termino = '$termino', Provincia = '$finprovincia', Parcela = '$parcela' WHERE Id = '$idfinca'"; 
        //Actualizo todo menos termino y provincia
        }else if(empty($termino) && empty($finprovincia) && !empty($parcela) && !empty($finobs)){
           $consulta = "UPDATE finca SET Parcela = '$parcela', Observaciones = '$finobs' WHERE Id = '$idfinca'"; 
        //Actualizo todo menos termino y parcela
        }else if(empty($termino) && !empty($finprovincia) && empty($parcela) && !empty($finobs)){
           $consulta = "UPDATE finca SET Provincia = '$finprovincia', Observaciones = '$finobs' WHERE Id = '$idfinca'"; 
        //Actualizo todo menos termino y observaciones
        }else if(empty($termino) && !empty($finprovincia) && !empty($parcela) && empty($finobs)){
           $consulta = "UPDATE finca SET Provincia = '$finprovincia', Parcela = '$parcela' WHERE Id = '$idfinca'"; 
        //Actualizo todo menos provincia y parcela
        }else if(!empty($termino) && empty($finprovincia) && empty($parcela) && !empty($finobs)){
           $consulta = "UPDATE finca SET Termino = '$termino', Observaciones = '$finobs' WHERE Id = '$idfinca'"; 
        //Actualizo todo menos provincia y observaciones
        }else if(!empty($termino) && empty($finprovincia) && !empty($parcela) && empty($finobs)){
           $consulta = "UPDATE finca SET Termino = '$termino', Parcela = '$parcela' WHERE Id = '$idfinca'"; 
        //Actualizo todo menos parcela y observaciones
        }else if(!empty($termino) && !empty($finprovincia) && empty($parcela) && empty($finobs)){
           $consulta = "UPDATE finca SET Termino = '$termino', Provincia = '$finprovincia' WHERE Id = '$idfinca'";
        //Actualizo termino   
        }else if(!empty($termino) && empty($finprovincia) && empty($parcela) && empty($finobs)){
           $consulta = "UPDATE finca SET Termino = '$termino' WHERE Id = '$idfinca'";
        //Actualizo provincia   
        }else if(empty($termino) && !empty($finprovincia) && empty($parcela) && empty($finobs)){
           $consulta = "UPDATE finca SET Provincia = '$finprovincia' WHERE Id = '$idfinca'";
        //Actualizo parcela  
        }else if(empty($termino) && empty($finprovincia) && !empty($parcela) && empty($finobs)){
           $consulta = "UPDATE finca SET Parcela = '$parcela' WHERE Id = '$idfinca'";
        //Actualizo observaciones   
        }else{
            $consulta = "UPDATE finca SET Observaciones = '$finobs' WHERE Id = '$idfinca'";
        }
        //guardamos el resultado de la consulta y volvemos a la pagina del formulario
        $resultado = $conexion -> query($consulta);
        header("Location:../../modelo/finca/finprincipal.php");
    }//fin else
?>    
    

