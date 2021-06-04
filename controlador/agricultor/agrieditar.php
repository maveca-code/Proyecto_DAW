<?php
    require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
    
    if(empty($idagricultor)){//si el id del agricultor no esta definido o es nula nos indica que lo pongamos.
        echo "Indique el Id y los campos del agricultor a modificar.";
        echo "<br><a href='../../modelo/agricultor/agriprincipal.php'>Volver al formulario...</a>";
    }else{//Pongo todas las opciones de modificación de la tabla.
        //Actualizo todos los campos
        if(!empty($agridir) && !empty($agrilocalidad) && !empty($agriprovincia) && !empty($agricodigopostal) && !empty($agriobs)){
            $consulta = "UPDATE agricultor SET Direccion = '$agridir', Localidad = '$agrilocalidad', Provincia = '$agriprovincia', CodigoPostal = '$agricodigopostal', Observaciones = '$agriobs' WHERE Id = '$idagricultor'";
        //Actualizo todos los campos menos direccion    
        }else if(empty($agridir) && !empty($agrilocalidad) && !empty($agriprovincia) && !empty($agricodigopostal) && !empty($agriobs)){
            $consulta = "UPDATE agricultor SET Localidad = '$agrilocalidad', Provincia = '$agriprovincia', CodigoPostal = '$agricodigopostal', Observaciones = '$agriobs' WHERE Id = '$idagricultor'";
        //Actualizo todos los campos menos localidad    
        }else if(!empty($agridir) && empty($agrilocalidad) && !empty($agriprovincia) && !empty($agricodigopostal) && !empty($agriobs)){
            $consulta = "UPDATE agricultor SET Direccion = '$agridir', Provincia = '$agriprovincia', CodigoPostal = '$agricodigopostal', Observaciones = '$agriobs' WHERE Id = '$idagricultor'";
        //Actualizo todos los campos menos provincia    
        }else if(!empty($agridir) && !empty($agrilocalidad) && empty($agriprovincia) && !empty($agricodigopostal) && !empty($agriobs)){
            $consulta = "UPDATE agricultor SET Direccion = '$agridir', Localidad = '$agrilocalidad', CodigoPostal = '$agricodigopostal', Observaciones = '$agriobs' WHERE Id = '$idagricultor'";
        //Actualizo todos los campos menos codigo postal
        }else if(!empty($agridir) && !empty($agrilocalidad) && !empty($agriprovincia) && empty($agricodigopostal) && !empty($agriobs)){
            $consulta = "UPDATE agricultor SET Direccion = '$agridir', Localidad = '$agrilocalidad', Provinica = '$agriprovincia', Observaciones = '$agriobs' WHERE Id = '$idagricultor'";
        //Actualizo todos los campos menos observaciones
        }else if(!empty($agridir) && !empty($agrilocalidad) && !empty($agriprovincia) && !empty($agricodigopostal) && empty($agriobs)){
            $consulta = "UPDATE agricultor SET Direccion = '$agridir', Localidad = '$agrilocalidad', Provinica = '$agriprovincia', CodigoPostal = '$agricodigopostal' WHERE Id = '$idagricultor'";
        //Actualizo todos los campos menos direccion y localidad
        }else if(empty($agridir) && empty($agrilocalidad) && !empty($agriprovincia) && !empty($agricodigopostal) && !empty($agriobs)){
            $consulta = "UPDATE agricultor SET Provinica = '$agriprovincia', CodigoPostal = '$agricodigopostal', Observaciones = '$agriobs' WHERE Id = '$idagricultor'";
        //Actualizo todos los campos menos direccion y provincia
        }else if(empty($agridir) && !empty($agrilocalidad) && empty($agriprovincia) && !empty($agricodigopostal) && !empty($agriobs)){
            $consulta = "UPDATE agricultor SET Localidad = '$agrilocalidad', CodigoPostal = '$agricodigopostal', Observaciones = '$agriobs' WHERE Id = '$idagricultor'";
        //Actualizo todos los campos menos direccion y codigo postal
        }else if(empty($agridir) && !empty($agrilocalidad) && !empty($agriprovincia) && empty($agricodigopostal) && !empty($agriobs)){
            $consulta = "UPDATE agricultor SET Localidad = '$agrilocalidad', Provincia = '$agriprovincia', Observaciones = '$agriobs' WHERE Id = '$idagricultor'";
        //Actualizo todos los campos menos direccion y observaciones 
        }else if(empty($agridir) && !empty($agrilocalidad) && !empty($agriprovincia) && !empty($agricodigopostal) && empty($agriobs)){
            $consulta = "UPDATE agricultor SET Localidad = '$agrilocalidad', Provincia = '$agriprovincia', CodigoPostal = '$agricodigopostal' WHERE Id = '$idagricultor'";
        //Actualizo todos los campos menos localidad y provincia
        }else if(!empty($agridir) && empty($agrilocalidad) && empty($agriprovincia) && !empty($agricodigopostal) && !empty($agriobs)){
            $consulta = "UPDATE agricultor SET Direccion = '$agridir', CodigoPostal = '$agricodigopostal', Observaciones = '$agriobs' WHERE Id = '$idagricultor'";
        //Actualizo todos los campos menos localidad y codigo postal
        }else if(!empty($agridir) && empty($agrilocalidad) && !empty($agriprovincia) && empty($agricodigopostal) && !empty($agriobs)){
            $consulta = "UPDATE agricultor SET Direccion = '$agridir', Provincia = '$agriprovincia', Observaciones = '$agriobs' WHERE Id = '$idagricultor'";
        //Actualizo todos los campos menos localidad y observaciones
        }else if(!empty($agridir) && empty($agrilocalidad) && !empty($agriprovincia) && !empty($agricodigopostal) && empty($agriobs)){
            $consulta = "UPDATE agricultor SET Direccion = '$agridir', Provincia = '$agriprovincia', CodigoPostal = '$agricodigopostal' WHERE Id = '$idagricultor'";
        //Actualizo todos los campos menos provincia y codigo postal
        }else if(!empty($agridir) && !empty($agrilocalidad) && empty($agriprovincia) && empty($agricodigopostal) && !empty($agriobs)){
            $consulta = "UPDATE agricultor SET Direccion = '$agridir', Localidad = '$agrilocalidad', Observaciones = '$agriobs' WHERE Id = '$idagricultor'";
        //Actualizo todos los campos menos provincia y observaciones
        }else if(!empty($agridir) && !empty($agrilocalidad) && empty($agriprovincia) && !empty($agricodigopostal) && empty($agriobs)){
            $consulta = "UPDATE agricultor SET Direccion = '$agridir', Localidad = '$agrilocalidad', CodigoPostal = '$agricodigopostal' WHERE Id = '$idagricultor'";
        //Actualizo todos los campos menos codigo postal y observaciones
        }else if(!empty($agridir) && !empty($agrilocalidad) && !empty($agriprovincia) && empty($agricodigopostal) && empty($agriobs)){
            $consulta = "UPDATE agricultor SET Direccion = '$agridir', Localidad = '$agrilocalidad', Provincia= '$agriprovincia' WHERE Id = '$idagricultor'";
        //Actualizo todos los campos menos direccion, localidad y provincia
        }else if(empty($agridir) && empty($agrilocalidad) && empty($agriprovincia) && !empty($agricodigopostal) && !empty($agriobs)){
            $consulta = "UPDATE agricultor SET CodigoPostal = '$agricodigopostal', Observaciones = '$agriobs' WHERE Id = '$idagricultor'";
        //Actualizo todos los campos menos direccion, localidad y codigo postal
        }else if(empty($agridir) && empty($agrilocalidad) && !empty($agriprovincia) && empty($agricodigopostal) && !empty($agriobs)){
            $consulta = "UPDATE agricultor SET Provincia = '$agriprovincia', Observaciones = '$agriobs' WHERE Id = '$idagricultor'";
        //Actualizo todos los campos menos direccion, localidad y observaciones
        }else if(empty($agridir) && empty($agrilocalidad) && !empty($agriprovincia) && !empty($agricodigopostal) && empty($agriobs)){
            $consulta = "UPDATE agricultor SET Provincia = '$agriprovincia', CodigoPostal = '$agricodigopostal' WHERE Id = '$idagricultor'";
        //Actualizo todos los campos menos localidad, provincia y codigo postal
        }else if(!empty($agridir) && empty($agrilocalidad) && empty($agriprovincia) && empty($agricodigopostal) && !empty($agriobs)){
            $consulta = "UPDATE agricultor SET Direccion = '$agridir', Observaciones = '$agriobs' WHERE Id = '$idagricultor'";
        //Actualizo todos los campos menos localidad, provincia y observaciones
        }else if(!empty($agridir) && empty($agrilocalidad) && empty($agriprovincia) && !empty($agricodigopostal) && empty($agriobs)){
            $consulta = "UPDATE agricultor SET Direccion = '$agridir', CodigoPostal= '$agricodigopostal' WHERE Id = '$idagricultor'";
        //Actualizo todos los campos menos provincia, codigo postal y observaciones
        }else if(!empty($agridir) && !empty($agrilocalidad) && empty($agriprovincia) && empty($agricodigopostal) && empty($agriobs)){
            $consulta = "UPDATE agricultor SET Direccion = '$agridir', Localidad = '$agrilocalidad' WHERE Id = '$idagricultor'";
        //Actualizo todos los campos menos direccion
        }else if(empty($agridir) && !empty($agrilocalidad) && !empty($agriprovincia) && !empty($agricodigopostal) && !empty($agriobs)){
            $consulta = "UPDATE agricultor SET Localidad = '$agrilocalidad', Provincia = '$agriprovincia', CodigoPostal = '$agricodigopostal', Observaciones = '$agriobs' WHERE Id = '$idagricultor'";
        //Actualizo todos los campos menos localidad
        }else if(!empty($agridir) && empty($agrilocalidad) && !empty($agriprovincia) && !empty($agricodigopostal) && !empty($agriobs)){
            $consulta = "UPDATE agricultor SET Direccion = '$agridir', Provincia = '$agriprovincia', CodigoPostal = '$agricodigopostal', Observaciones = '$agriobs' WHERE Id = '$idagricultor'";
        //Actualizo todos los campos menos provinicia
        }else if(!empty($agridir) && !empty($agrilocalidad) && empty($agriprovincia) && !empty($agricodigopostal) && !empty($agriobs)){
            $consulta = "UPDATE agricultor SET Direccion = '$agridir', Localidad = '$agrilocalidad', CodigoPostal = '$agricodigopostal', Observaciones = '$agriobs' WHERE Id = '$idagricultor'";
        //Actualizo todos los campos menos codigo postal
        }else if(!empty($agridir) && !empty($agrilocalidad) && !empty($agriprovincia) && empty($agricodigopostal) && !empty($agriobs)){
            $consulta = "UPDATE agricultor SET Direccion = '$agridir', Localidad = '$agrilocalidad', Provincia = '$agriprovincia', Observaciones = '$agriobs' WHERE Id = '$idagricultor'";
        //Actualizo todos los campos menos observaciones
        }else{
            $consulta = "UPDATE agricultor SET Direccion = '$agridir', Localidad = '$agrilocalidad', Provincia = '$agriprovincia', CodigoPostal= '$agricodigopostal' WHERE Id = '$idagricultor'";
        }    
    }//fin else
    
     //guardamos el resultado de la consulta y volvemos a la pagina del formulario
        $resultado = $conexion -> query($consulta);
        header("Location:../../modelo/agricultor/agriprincipal.php");
?>        

